<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    public $table = 'jadwals';

    public $fillable = [
        'tgl',
        'jam',
        'kuota',
        'psikolog_id'
    ];

    protected $casts = [
        'tgl' => 'date',
        'jam' => 'string',
        'kuota' => 'integer',
        'psikolog_id' => 'string'
    ];

    public static array $rules = [
        'tgl' => 'required',
        'jam' => 'required',
        'kuota' => 'required'
    ];

    
}
