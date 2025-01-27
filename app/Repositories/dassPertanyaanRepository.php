<?php

namespace App\Repositories;

use App\Models\dassPertanyaan;
use App\Repositories\BaseRepository;

class dassPertanyaanRepository extends BaseRepository
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
        return dassPertanyaan::class;
    }
}
