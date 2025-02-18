<?php

namespace App\Repositories;

use App\Models\keluhan;
use App\Repositories\BaseRepository;

class keluhanRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return keluhan::class;
    }
}
