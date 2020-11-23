<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeedlingImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seedling_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seedling_id')->unsigned();
            $table->string('thumbnail')->nullable();
            $table->string('full')->nullable();

            $table->foreign('seedling_id')->references('id')->on('seedlings')->onDelete('cascade');
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
        Schema::dropIfExists('seedling_images');
    }
}
