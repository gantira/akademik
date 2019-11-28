<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingPenerimaan extends Model
{
    protected $fillable = [
        'jumlah_penerimaan', 'nilai_kelulusan'
    ];
}
