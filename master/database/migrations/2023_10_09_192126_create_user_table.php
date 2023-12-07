
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
        Schema::create('users', function (Blueprint $table) {

                $table->id();
                $table->mediumText('image')->nullable();
                $table->string('name')->nullable();
                $table->string('email')->unique();
                $table->string('password')->nullable();
                $table->string('address')->nullable();
                $table->string('phone')->nullable();
                $table->string('city')->nullable();
                $table->string('google_id')->nullable();
                $table->enum('user_type', ['customer', 'beautyexperts'])->defaultValue('customer');
                $table->timestamps();

        });

        // Schema::table('users', function (Blueprint $table) {
        //     $table->string('role')->default('user'); // 'user' can be the default role
        // });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
