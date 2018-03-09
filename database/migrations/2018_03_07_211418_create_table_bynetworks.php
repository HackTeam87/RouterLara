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
            $table->string('model',70);
            $table->string('producer',70);
            $table->string('type',70);
            $table->string('standard',70);
            $table->string('dualBand',70);
            $table->string('interface',70);
            $table->string('wan',70);
            $table->string('usb',70);
            $table->string('storage',70);
            $table->string('typeAntenna',70);
            $table->string('numberAntenna',70);
            $table->text('text')->nullable();
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
        Schema::dropIfExists('bynetworks');
    }
}
