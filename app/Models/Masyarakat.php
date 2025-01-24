<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    public $table = 'masyarakats';

    public $fillable = [
        'nik',
        'nama',
        'tgl_lahir',
        'alamat',
        'hp',
        'desa_id',
        'kec_id',
        'user_id'
    ];

    protected $casts = [
        'nik' => 'string',
        'nama' => 'string',
        'tgl_lahir' => 'date',
        'alamat' => 'string',
        'hp' => 'string',
        'desa_id' => 'integer',
        'kec_id' => 'integer',
        'user_id' => 'integer'
    ];

    public static array $rules = [
        'nik' => 'required',
        'nama' => 'tgl_lahir date date',
        'tgl_lahir' => 'required',
        'hp' => 'required',
        'desa_id' => 'kec_id integer number'
    ];

    
}
