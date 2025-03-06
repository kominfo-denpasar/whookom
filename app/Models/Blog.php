<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table = 'blogs';

    public $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'slug',
        'user_id'
    ];

    protected $casts = [
        'judul' => 'string',
        'deskripsi' => 'string',
        'gambar' => 'string',
        'slug' => 'string',
        'user_id' => 'string'
    ];

    public static array $rules = [
        'judul' => 'required',
        'deskripsi' => 'required',
        'slug' => 'user_id string text s,ii',
        'user_id' => 'required'
    ];

    
}
