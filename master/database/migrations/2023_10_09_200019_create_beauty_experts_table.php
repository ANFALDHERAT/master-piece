<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeautyExpertsTable extends Migration
{
    public function up()
    {
        Schema::create('beauty_experts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->text('working_hours');
            $table->text('availability');
            $table->string('service_area')->nullable();
            $table->string('services_offered')->nullable();
            $table->text('description')->nullable();
            $table->mediumText('image1')->nullable();
            $table->mediumText('image2')->nullable();
            $table->mediumText('image3')->nullable();
            $table->mediumText('image4')->nullable();
            $table->mediumText('image5')->nullable();
            $table->string('expertise')->nullable();
            $table->decimal('average_rating', 5, 2)->nullable();
            $table->unsignedBigInteger('service_id');
            $table->decimal('price', 10, 2); // Adjust precision and scale as needed
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('beauty_experts');
    }
}
