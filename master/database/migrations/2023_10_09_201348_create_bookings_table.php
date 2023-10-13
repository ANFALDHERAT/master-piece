<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');

            // $table->unsignedBigInteger('serviceprice_id')->nullable();
            $table->string('name');

            $table->text('working_hours');
            $table->text('availability');

            $table->decimal('price', 10, 2);
            $table->integer('quantity')->default(1);
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');

            // $table->foreign('serviceprice_id')->references('id')->on('service_prices');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('quantity'); // Remove the 'quantity' column
        });
    }
};
