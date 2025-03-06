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
        'slug' => 'required',
        'user_id' => 'required'
    ];

    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    
}
