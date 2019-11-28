<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('nama');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jk');
            $table->string('photo');
            $table->string('telepon');
            $table->string('agama');
            $table->string('jabatan');
            $table->string('ijazah');
            $table->string('golongan');
            $table->date('tanggal_pegawai');
            $table->date('tanggal_kerja');
            $table->string('naik_tingkat');
            $table->string('masa_kerja');
            $table->integer('gaji_pokok');
            $table->integer('naik_gaji_berkala');
            $table->string('sk_pindahan');
            $table->string('tempat_tugas_luar');
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
        Schema::drop('gurus');
    }
}
