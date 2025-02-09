<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masalah extends Model
{
    public $table = 'masalahs';

    public $fillable = [
        'nama',
        'deskripsi',
        'status'
    ];

    protected $casts = [
        'nama' => 'string',
        'deskripsi' => 'string',
        'status' => 'integer'
    ];

    public static array $rules = [
        'nama' => 'required'
    ];

    
}
