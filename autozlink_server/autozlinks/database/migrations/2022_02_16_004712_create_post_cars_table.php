<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_cars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('car_category_id')->nullable();
            $table->integer('car_fuel_type_id')->nullable();
            $table->integer('car_brand_id')->nullable();
            $table->integer('car_model_id')->nullable();
            $table->integer('car_condition_id')->nullable();
            $table->integer('car_transmission_id')->nullable();
            $table->string('mileage')->nullable();
            $table->float('price')->nullable();
            $table->string('title')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('payment_status')->default(0);
            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('register')->default(0);
            $table->tinyInteger('negotiable')->default(0);
            $table->tinyInteger('facebook_ads')->default(0);
            $table->tinyInteger('instagram_ads')->default(0);
            $table->integer('post_cars_plan_id')->nullable();
            $table->string('image')->nullable();
            $table->string('color')->nullable();
            $table->string('vin_number')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('year')->nullable();
            $table->string('reference')->nullable();
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
        Schema::dropIfExists('post_cars');
    }
}
