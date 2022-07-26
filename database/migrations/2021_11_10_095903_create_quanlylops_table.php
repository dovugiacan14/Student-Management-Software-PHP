<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuanlylopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quanlylops', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('malop')->unsigned();
            $table->foreign('malop')->references('id')->on('lops');
            $table->integer('magvcn')->unsigned();
            $table->foreign('magvcn')->references('id')->on('giaoviens');
            $table->integer('maloptruong')->unsigned();
            $table->foreign('maloptruong')->references('id')->on('hocsinhs');
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
        Schema::dropIfExists('quanlylops');
    }
}
