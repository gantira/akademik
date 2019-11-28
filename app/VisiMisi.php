<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{

	protected $table = 'visimisis';
	
    protected $fillable = [
        'judul', 'content'
    ];
}
