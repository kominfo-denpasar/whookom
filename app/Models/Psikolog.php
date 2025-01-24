<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    public $table = 'psikologs';

    public $fillable = [
        'nik',
        'nama',
        'hp',
        'user_id'
    ];

    protected $casts = [
        'nik' => 'string',
        'nama' => 'string',
        'hp' => 'string',
        'user_id' => 'integer'
    ];

    public static array $rules = [
        'nik' => 'required',
        'nama' => 'required',
        'hp' => 'required'
    ];

    
}
