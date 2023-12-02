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
        Schema::create('Laser', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('image')->nullable();
            $table->text('description')->nullable();
            $table->decimal('average_rating', 5, 2)->nullable();
            $table->string('service_area')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_laser');
    }
};
