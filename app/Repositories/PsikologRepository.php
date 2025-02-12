<?php

namespace App\Repositories;

use App\Models\Psikolog;
use App\Repositories\BaseRepository;

class PsikologRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nik',
        'kta',
        'sipp',
        'nama',
        'hp',
        'alamat_rumah',
        'alamat_praktek',
        'kec_id',
        'desa_id',
        'user_id',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Psikolog::class;
    }
}
