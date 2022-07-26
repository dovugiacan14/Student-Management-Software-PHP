<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangdiemmonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangdiemmons', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('mamh')->unsigned();
            $table->foreign('mamh')->references('id')->on('monhocs');
            $table->integer('maqth')->unsigned();
            $table->foreign('maqth')->references('id')->on('quatrinhhocs');
            $table->float('diemtb_mon')->nullable();
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
        Schema::dropIfExists('bangdiemmons');
    }
}
