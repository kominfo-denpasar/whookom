<?php

namespace App\Repositories;

use App\Models\Evaluasi;
use App\Repositories\BaseRepository;

class EvaluasiRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Evaluasi::class;
    }
}
