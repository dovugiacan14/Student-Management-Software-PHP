<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaihinhkiemtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaihinhkiemtras', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('tenlhkt');
            $table->integer('hesodiem');
            $table->integer('thoigiankiemtra');
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
        Schema::dropIfExists('loaihinhkiemtras');
    }
}
