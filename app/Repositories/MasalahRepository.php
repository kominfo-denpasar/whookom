<?php

namespace App\Repositories;

use App\Models\Masalah;
use App\Repositories\BaseRepository;

class MasalahRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nama',
        'deskripsi',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Masalah::class;
    }
}
