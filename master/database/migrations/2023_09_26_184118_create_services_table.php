

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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->mediumText('image')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('expert_id');

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('expert_id')->references('id')->on('beauty_experts');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
