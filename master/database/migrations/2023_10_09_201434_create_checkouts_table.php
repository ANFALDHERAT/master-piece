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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('expert_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('payment', 10, 2); // Adjust precision and scale as needed
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('booking_id');
            $table->decimal('total_amount', 10, 2); // Adjust precision and scale as needed
            $table->string('payment_method');
            $table->timestamps();

            $table->foreign('expert_id')->references('id')->on('beauty_experts');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('booking_id')->references('id')->on('bookings');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
