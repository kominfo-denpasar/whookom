<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    public $table = 'pengaturans';

    public $fillable = [
        'slug',
        'value',
        'value_type',
        'helper',
        'user_id'
    ];

    protected $casts = [
        'slug' => 'string',
        'value' => 'string',
        'value_type' => 'string',
        'helper' => 'string',
        'user_id' => 'integer'
    ];

    public static array $rules = [
        
    ];

    
}
