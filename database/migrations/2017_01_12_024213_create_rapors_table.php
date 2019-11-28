<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaporsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('siswa_id')->nullable();
            $table->unsignedInteger('kelas_id')->nullable();
            $table->unsignedInteger('tahunajaran_id')->nullable();
            $table->string('extra1');
            $table->string('extra2');
            $table->string('extra3');
            $table->string('extra_keterangan1');
            $table->string('extra_keterangan2');
            $table->string('extra_keterangan3');
            $table->string('prestasi1');
            $table->string('prestasi2');
            $table->string('prestasi3');
            $table->string('prestasi_keterangan1');
            $table->string('prestasi_keterangan2');
            $table->string('prestasi_keterangan3');
            $table->text('sikap');
            $table->text('catatan_walikelas');
            $table->text('tanggapan_orangtua');
            $table->string('kenaikan');
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('rapors');
    }
}
