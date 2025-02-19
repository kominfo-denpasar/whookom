<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class keluhan extends Model
{
    public $table = 'keluhans';

    protected $dates = [
        'jadwal_tgl',
        'jadwal_alt_tgl',
        'jadwal_alt2_tgl'
    ];

    public $fillable = [
        'keluhan',
        'waktu_kapan',
        'nilai_mengganggu',
        'jadwal_id',
        'jadwal_tgl',
        'jadwal_alt_tgl',
        'jadwal_alt_jam',
        'jadwal_alt2_tgl',
        'jadwal_alt2_jam',
        'mas_id',
        'psikolog_id',
        'status'
    ];

    protected $casts = [
        'keluhan' => 'string',
        'waktu_kapan' => 'string',
        'nilai_mengganggu' => 'integer',
        'jadwal_id' => 'integer',
        'jadwal_tgl' => 'date',
        'jadwal_alt_tgl' => 'date',
        'jadwal_alt_jam' => 'string',
        'jadwal_alt2_tgl' => 'date',
        'jadwal_alt2_jam' => 'string',
        'mas_id' => 'string',
        'psikolog_id' => 'string',
        'status' => 'integer'
    ];

    public static array $rules = [
        'keluhan' => 'required',
        'waktu_kapan' => 'required',
        'nilai_mengganggu' => 'required',
        'jadwal_id' => 'required',
        'mas_id' => 'required'
    ];

    
}
