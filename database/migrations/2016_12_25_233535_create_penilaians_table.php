<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('siswa_id')->nullable();
            $table->unsignedInteger('kelas_id')->nullable();
            $table->unsignedInteger('matapelajaran_id')->nullable();
            $table->unsignedInteger('tahunajaran_id')->nullable();
            $table->integer('quiz');
            $table->integer('tugas');
            $table->integer('uts');
            $table->integer('uas');
            $table->text('catatan');
            $table->text('sikap');
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('matapelajaran_id')->references('id')->on('matapelajarans')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('penilaians');
    }
}