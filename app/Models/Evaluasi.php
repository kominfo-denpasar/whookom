<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluasi extends Model
{
    public $table = 'evaluasis';

    public $fillable = [
        'nilai_layanan',
        'nilai_keluhan',
        'rekomendasi'
    ];

    protected $casts = [
        'nilai_layanan' => 'integer',
        'nilai_keluhan' => 'integer',
        'rekomendasi' => 'integer'
    ];

    public static array $rules = [
        'nilai_layanan' => 'required',
        'nilai_keluhan' => 'required',
        'rekomendasi' => 'required'
    ];

    
}
