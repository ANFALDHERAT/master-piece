
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
            $table->string('phone');
            $table->string('image')->nullable();
            $table->string('cv')->nullable();
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->integer('years_of_experience')->nullable();
            $table->integer('age')->nullable();
            $table->decimal('price', 10, 2)->nullable(); // Adjust precision and scale as needed
            $table->string('profession')->nullable();
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
