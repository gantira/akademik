<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
    	'nama_kelas', 
    	'guru_id', 
    	'kapasitas',
    	'tahunajaran_id',

    ];

    public function guru()
    {
    	return $this->belongsTo('App\Guru');
    }

    public function tahunajaran()
    {
        return $this->belongsTo('App\TahunAjaran');
    }

    public function jadwal()
    {
        return $this->hasMany('App\Jadwal');
    }


}
