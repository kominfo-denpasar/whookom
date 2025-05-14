<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    // use HasFactory;
    public $table = 'transaksis';
    public $fillable = [
        'source_id',
        'asset_hash',
        'transaction_hash',
        'onchain_url',
        'algorithm',
        'signature'
    ];
    protected $casts = [
        'source_id' => 'string',
        'asset_hash' => 'string',
        'transaction_hash' => 'string',
        'onchain_url' => 'string',
        'algorithm' => 'string',
        'signature' => 'string'
    ];
}
