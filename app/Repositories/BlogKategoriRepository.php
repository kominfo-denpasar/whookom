<?php

namespace App\Repositories;

use App\Models\BlogKategori;
use App\Repositories\BaseRepository;

class BlogKategoriRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'judul',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return BlogKategori::class;
    }
}
