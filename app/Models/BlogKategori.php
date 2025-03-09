<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogKategori extends Model
{
    public $table = 'blog_kategoris';

    public $fillable = [
        'judul',
        'slug',
        'status',
        'user_id'
    ];

    protected $casts = [
        'judul' => 'string',
        'slug' => 'string',
        'status' => 'integer',
        'user_id' => 'integer'
    ];

    public static array $rules = [
        'judul' => 'required',
        'slug' => 'required',
        'status' => 'required'
    ];

    
}
