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
            $table->string('model',70);
            $table->string('producer',70);
            $table->string('type',70);
            $table->string('processor',70);
            $table->string('storage',70);
            $table->string('wifi',70);
            $table->string('interface',70);
            $table->string('compozit',70);
            $table->string('usb',70);
            $table->string('images',100)->nullable();
            $table->decimal('price', 5, 2)->nullable();
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
