<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    public $table = 'masyarakats';

    public $fillable = [
        'nik',
        'nama',
        'jk',
        'tgl_lahir',
        'alamat',
        'hp',
        'email',
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
        'email' => 'string',
        'desa_id' => 'integer',
        'kec_id' => 'integer',
        'user_id' => 'integer'
    ];

    public static array $rules = [
        'nik' => 'required',
        'nama' => 'required',
        'tgl_lahir' => 'required',
        'hp' => 'required',
        'email' => 'required'
    ];

    
}
