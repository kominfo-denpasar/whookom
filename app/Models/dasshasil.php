<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dasshasil extends Model
{
    public $table = 'dasshasils';

    public $fillable = [
        'mas_id',
        'nilai_d',
        'nilai_s',
        'nilai_a',
        'hasil_akhir'
    ];

    protected $casts = [
        'mas_id' => 'integer',
        'nilai_d' => 'integer',
        'nilai_s' => 'integer',
        'nilai_a' => 'integer',
        'hasil_akhir' => 'string'
    ];

    public static array $rules = [
        'mas_id' => 'required'
    ];

    
}
