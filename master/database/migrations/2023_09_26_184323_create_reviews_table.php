
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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('expert_id');
            $table->text('comment')->nullable();
            $table->integer('rating');
            $table->timestamp('date_posted');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('expert_id')->references('id')->on('beauty_experts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
