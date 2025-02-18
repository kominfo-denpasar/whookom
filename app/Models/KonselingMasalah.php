<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonselingMasalah extends Model
{
    public $table = 'konseling_masalahs';

    public $fillable = [
        
    ];

    protected $casts = [
        'masalah_id' => 'integer',
        'konseling_id' => 'integer'
    ];

    public static array $rules = [
        
    ];

    
}
