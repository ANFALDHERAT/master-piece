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
        Schema::create('join_us', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->mediumText('image')->nullable();
            $table->string('cv')->nullable();
            $table->string('profession')->default(null)->nullable();
            $table->text('description')->default('')->nullable();
            $table->string('location')->default('')->nullable();
            $table->integer('years_of_experience')->nullable();
            $table->integer('age')->nullable();
            $table->decimal('price', 10, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_us');
    }
};
