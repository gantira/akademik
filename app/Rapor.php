<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapor extends Model
{
    protected $fillable = [
        'siswa_id', 
        'kelas_id', 
        'tahunajaran_id',
        'sikap',
        'extra1',
        'extra2',
        'extra3',
        'extra_keterangan1',
        'extra_keterangan2',
        'extra_keterangan3',
        'prestasi1',
        'prestasi2',
        'prestasi3',
        'prestasi_keterangan1',
        'prestasi_keterangan2',
        'prestasi_keterangan3',
        'catatan_walikelas',
        'tanggapan_orangtua',
        'kenaikan'
    ];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }

    public function kelas()
    {
        return $this->belongsTo('App\kelas');
    }
}
