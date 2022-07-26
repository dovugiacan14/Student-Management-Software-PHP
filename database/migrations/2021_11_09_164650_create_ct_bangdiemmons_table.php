<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtBangdiemmonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_bangdiemmons', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('malhkt')->unsigned();
            $table->foreign('malhkt')->references('id')->on('loaihinhkiemtras');
            $table->integer('mabdm')->unsigned();
            $table->foreign('mabdm')->references('id')->on('bangdiemmons');
            $table->float('diem');
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
        Schema::dropIfExists('ct_bangdiemmons');
    }
}
