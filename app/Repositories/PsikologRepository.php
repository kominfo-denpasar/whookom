<?php

namespace App\Repositories;

use App\Models\Psikolog;
use App\Repositories\BaseRepository;

class PsikologRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nik',
        'nama',
        'hp',
        'user_id'
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
