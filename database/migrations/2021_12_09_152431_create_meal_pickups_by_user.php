<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealPickupsByUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_pickups_by_user', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            // foreign keys
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('meal_id')->constrained('meal_details');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_pickups_by_user');
    }
}
