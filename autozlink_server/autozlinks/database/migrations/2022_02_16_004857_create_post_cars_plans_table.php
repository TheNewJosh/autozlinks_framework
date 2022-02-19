<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCarsPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_cars_plans', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->nullable();
            $table->string('title')->nullable();
            $table->float('price')->nullable();
            $table->float('price_facebook')->nullable();
            $table->float('price_instagram')->nullable();
            $table->integer('featuring')->nullable();
            $table->integer('photos')->nullable();
            $table->integer('limit')->nullable();
            $table->string('expiration_time')->nullable();
            $table->string('featured_expiration_time')->nullable();
            $table->string('description')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('post_cars_plans');
    }
}
