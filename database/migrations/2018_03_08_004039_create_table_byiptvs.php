<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableByiptvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('byiptvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model',170)->nullable();
            $table->string('producer',170)->nullable();
            $table->string('type',170)->nullable();
            $table->string('processor',170)->nullable();
            $table->string('storage',170)->nullable();
            $table->string('wifi',170)->nullable();
            $table->string('interface',170)->nullable();
            $table->string('compozit',170)->nullable();
            $table->string('usb',170)->nullable();
            $table->string('images',100)->nullable();
            $table->integer('price', 150)->nullable();
            $table->integer('category_id')->nullable();
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
        Schema::dropIfExists('byiptvs');
    }
}
