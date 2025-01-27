<?php

namespace App\Repositories;

use App\Models\dass_pertanyaan;
use App\Repositories\BaseRepository;

class dass_pertanyaanRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'pertanyaan',
        'kode'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return dass_pertanyaan::class;
    }
}
