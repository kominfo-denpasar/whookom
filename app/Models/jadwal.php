<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

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

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d/m/Y');
    }

    
}
