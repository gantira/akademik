<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{

	protected $fillable = [
        'siswa_id', 
        'kelas_id', 
        'tahunajaran_id',
        'keterangan',
        'tanggal'
   
    ];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
}
