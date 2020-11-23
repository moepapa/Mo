<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeedlingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seedlings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id')->unsigned();
            $table->string('myan_name');
            $table->string('eng_name');
            $table->string('botany_name');
            $table->string('race');
            $table->string('duration');
            $table->string('slug');
            $table->string('origin');
            $table->text('cultivate')->nullable();
            $table->text('soil')->nullable();
            $table->text('grow')->nullable();
            $table->text('medicine')->nullable();
            $table->string('cultivateTitle');
            $table->string('soilTitle');
            $table->string('growTitle');
            $table->string('medicineTitle');
            $table->unsignedInteger('quantity');
            $table->decimal('weight', 8, 2)->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('featured')->default(0);

            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade')->constrained();

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
        Schema::dropIfExists('seedlings');
    }
}