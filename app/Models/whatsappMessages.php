<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class whatsappMessages extends Model
{
    public $table = 'whatsapp_messages';

    public $fillable = [
        'message_id',
        'from',
        'pushname',
        'type',
        'content',
        'caption',
        'mime_type',
        'is_group'
    ];

    protected $casts = [
        'message_id' => 'string',
        'from' => 'string',
        'pushname' => 'string',
        'type' => 'string',
        'content' => 'string',
        'caption' => 'string',
        'mime_type' => 'string',
        'is_group' => 'integer'
    ];

    public static array $rules = [
        
    ];

    
}
