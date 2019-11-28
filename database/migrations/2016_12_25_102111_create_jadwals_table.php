<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kelas_id')->nullable();
            $table->unsignedInteger('matapelajaran_id')->nullable();
            $table->unsignedInteger('guru_id')->nullable();
            $table->unsignedInteger('hari_id')->nullable();
            $table->unsignedInteger('jam_id')->nullable();
            $table->unsignedInteger('tahunajaran_id')->nullable();
            $table->timestamps();

            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('matapelajaran_id')->references('id')->on('matapelajarans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('hari_id')->references('id')->on('haris')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jam_id')->references('id')->on('jams')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('jadwals');
    }
}