<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persentase extends Model
{
    protected $fillable = [
        'uts', 
        'quiz', 
        'tugas',
        'uas'
    ];
}
