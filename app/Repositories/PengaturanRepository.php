<?php

namespace App\Repositories;

use App\Models\Pengaturan;
use App\Repositories\BaseRepository;

class PengaturanRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Pengaturan::class;
    }
}
