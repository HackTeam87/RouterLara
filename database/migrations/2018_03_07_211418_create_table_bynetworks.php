<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBynetworks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bynetworks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model',170)->nullable();
            $table->string('producer',170)->nullable();
            $table->string('type',170)->nullable();
            $table->string('standart',170)->nullable();
            $table->string('dualBand',170)->nullable();
            $table->string('interface',170)->nullable();
            $table->string('wan',170)->nullable();
            $table->string('usb',170)->nullable();
            $table->string('storage',170)->nullable();
            $table->string('typeAntenna',170)->nullable();
            $table->string('numberAntenna',170)->nullable();
            $table->text('text')->nullable();
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
        Schema::dropIfExists('bynetworks');
    }
}
