<?php

namespace App\Repositories;

use App\Models\KonselingMasalah;
use App\Repositories\BaseRepository;

class KonselingMasalahRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return KonselingMasalah::class;
    }
}
