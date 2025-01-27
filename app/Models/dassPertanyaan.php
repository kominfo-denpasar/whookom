<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dassPertanyaan extends Model
{
    public $table = 'dass_pertanyaans';

    public $fillable = [
        'pertanyaan',
        'kode'
    ];

    protected $casts = [
        'pertanyaan' => 'string',
        'kode' => 'string'
    ];

    public static array $rules = [
        'pertanyaan' => 'required',
        'kode' => 'required'
    ];

    
}
