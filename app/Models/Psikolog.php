<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    public $table = 'psikologs';

    public $fillable = [
        'nik',
        'kta',
        'sipp',
        'nama',
        'hp',
        'alamat_rumah',
        'alamat_praktek',
        'kec_id',
        'desa_id',
        'user_id',
        'status'
    ];

    protected $casts = [
        'nik' => 'string',
        'kta' => 'string',
        'sipp' => 'string',
        'nama' => 'string',
        'hp' => 'string',
        'alamat_rumah' => 'string',
        'alamat_praktek' => 'string',
        'kec_id' => 'string',
        'desa_id' => 'string',
        'user_id' => 'integer',
        'status' => 'string'
    ];

    public static array $rules = [
        'nama' => 'required',
        'hp' => 'required',
        'alamat_praktek' => 'required'
    ];

    
}
