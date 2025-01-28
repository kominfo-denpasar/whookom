<?php

namespace App\Repositories;

use App\Models\dasshasil;
use App\Repositories\BaseRepository;

class dasshasilRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'hasil_akhir'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return dasshasil::class;
    }
}
