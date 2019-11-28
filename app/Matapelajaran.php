<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matapelajaran extends Model
{
    protected $fillable = [
        'nama_matapelajaran', 
        'semester',
        'kkm',
        'tahunajaran_id'
    ];

    public function tahunajaran()
    {
    	return $this->belongsTo('App\TahunAjaran');
    }

}
