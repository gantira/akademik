<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
    	'kelas_id', 
    	'matapelajaran_id', 
    	'guru_id', 
    	'hari_id', 
    	'jam_id', 
    	'tahunajaran_id'
    ];

    public function hari()
    {
    	return $this->belongsTo('App\Hari');
    }
    
	public function jam()
    {
    	return $this->belongsTo('App\Jam');
    }

    public function guru()
    {
    	return $this->belongsTo('App\Guru');
    }
    
	public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
    
    public function matapelajaran()
    {
        return $this->belongsTo('App\Matapelajaran');
    }

    public function tahunajaran()
    {
    	return $this->belongsTo('App\TahunAjaran');
    }

}
