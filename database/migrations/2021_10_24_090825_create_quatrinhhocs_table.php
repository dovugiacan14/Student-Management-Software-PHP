<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuatrinhhocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quatrinhhocs', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('malop')->unsigned();
            $table->foreign('malop')->references('id')->on('lops');
            $table->integer('mahs')->unsigned();
            $table->foreign('mahs')->references('id')->on('hocsinhs');
            $table->integer('mahk')->unsigned();
            $table->foreign('mahk')->references('id')->on('hockies');
            $table->float('diemtb_hocky')->nullable();
            $table->string('trangthaibaohiem')->nullable();
            $table->string('trangthaihocphi')->nullable();
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
        Schema::dropIfExists('quatrinhhocs');
    }
}
