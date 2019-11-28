<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'nis',
        'kelas_id',
        'nama_panggilan',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
        'agama',
        'anak_ke',
        'kandung',
        'tiri',
        'angkat',
        'anak_dalam_keluarga',
        'bahasa',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kota',
        'kode_pos',
        'telepon',
        'tinggal',
        'transportasi',
        'jarak_sekolah',
        'kg',
        'cm',
        'golongan_darah',
        'penyakit_berat',
        'sd_nama',
        'sd_no_ijazah',
        'sd_no_ijazah_tahun',
        'sd_lama_belajar',
        'smp_nama',
        'smp_no_ijazah',
        'smp_no_ijazah_tahun',
        'no_skhun',
        'no_skhun_tahun',
        'lama_belajar',
        'nama_sekolah_pindahan',
        'tanggal_diterima',
        'nama_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'pekerjaan_ayah',
        'pendidikan_ayah',
        'penghasilan_ayah',
        'telepon_ayah',
        'alamat_ayah',
        'nama_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'pekerjaan_ibu',
        'pendidikan_ibu',
        'penghasilan_ibu',
        'telepon_ibu',
        'alamat_ibu',
        'hobby',
        'cita_cita',
        'file_ijazah',
        'nilai_ijazah'
    ];

    public function kelas()
    {
    	return $this->belongsTo('App\Kelas');
    }

    public function penilaian()
    {
        return $this->hasMany('App\Penilaian');
    }

    public function absensi()
    {
        return $this->hasMany('App\Absensi');
    }

    public function rapor()
    {
        return $this->hasMany('App\Rapor');
    }

    
}
