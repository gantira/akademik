<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $fillable = [
        'siswa_id', 
        'kelas_id', 
        'matapelajaran_id',
        'tahunajaran_id',
        'quiz',
        'tugas',
        'uts',
        'uas',
        'catatan'
    ];

    public function tahunajaran()
    {
    	return $this->belongsTo('App\TahunAjaran');
    }

    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }

    public function kelas()
    {
        return $this->belongsTo('App\kelas');
    }

    public function matapelajaran()
    {
        return $this->belongsTo('App\matapelajaran');
    }
}
