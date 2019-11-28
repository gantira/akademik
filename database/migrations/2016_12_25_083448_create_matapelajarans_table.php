<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatapelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matapelajarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_matapelajaran');
            $table->integer('kkm');
            $table->string('semester');
            $table->unsignedInteger('tahunajaran_id')->nullable();
            $table->timestamps();

            $table->foreign('tahunajaran_id')->references('id')->on('tahunajarans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matapelajarans');
    }
}
