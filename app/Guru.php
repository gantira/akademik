<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'nip',
        'nama',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
        'semester',
        'photo',
        'telepon',
        'agama',
        'jabatan',
        'ijazah',
        'golongan',
        'tanggal_pegawai',
        'tanggal_kerja',
        'naik_tingkat',
        'masa_kerja',
        'gaji_pokok',
        'naik_gaji_berkala',
        'sk_pindahan',
        'tempat_tugas_luar' 
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
