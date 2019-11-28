<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis');
            $table->unsignedInteger('kelas_id')->nullable();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jk');
            $table->string('agama');
            $table->string('anak_ke');
            $table->string('kandung');
            $table->string('tiri');
            $table->string('angkat');
            $table->string('anak_dalam_keluarga');
            $table->string('bahasa');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('kode_pos');
            $table->string('telepon');
            $table->string('tinggal');
            $table->string('transportasi');
            $table->string('jarak_sekolah');
            $table->string('kg');
            $table->string('cm');
            $table->string('golongan_darah');
            $table->string('penyakit_berat');
            $table->string('sd_nama');
            $table->string('sd_no_ijazah');
            $table->string('sd_no_ijazah_tahun');
            $table->string('sd_lama_belajar');
            $table->string('smp_nama');
            $table->string('smp_no_ijazah');
            $table->string('smp_no_ijazah_tahun');
            $table->string('no_skhun');
            $table->string('no_skhun_tahun');
            $table->string('lama_belajar');
            $table->string('nama_sekolah_pindahan');
            $table->date('tanggal_diterima');
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->string('tanggal_lahir_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('telepon_ayah');
            $table->string('alamat_ayah');
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->string('tanggal_lahir_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('telepon_ibu');
            $table->string('alamat_ibu');
            $table->string('hobby');
            $table->string('cita_cita');
            $table->string('file_ijazah');
            $table->integer('nilai_ijazah');
            $table->timestamps();

            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('siswas');
    }
}
