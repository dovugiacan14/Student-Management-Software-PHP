<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuongtrinhhocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuongtrinhhocs', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('makhoi')->unsigned();
            $table->foreign('makhoi')->references('id')->on('khois');
            $table->integer('mamh')->unsigned();
            $table->foreign('mamh')->references('id')->on('monhocs');
            $table->integer('heso');
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
        Schema::dropIfExists('chuongtrinhhocs');
    }
}
