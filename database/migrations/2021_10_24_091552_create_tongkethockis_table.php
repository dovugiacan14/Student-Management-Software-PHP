<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTongkethockisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tongkethockis', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('malop')->unsigned();
            $table->foreign('malop')->references('id')->on('lops');
            $table->integer('mahk')->unsigned();
            $table->foreign('mahk')->references('id')->on('hockies');
            $table->integer('soluongdat')->nullable();
            $table->float('tile')->nullable();
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
        Schema::dropIfExists('tongkethockis');
    }
}
