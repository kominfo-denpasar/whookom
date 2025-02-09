<?php

namespace App\Repositories;

use App\Models\Konseling;
use App\Repositories\BaseRepository;

class KonselingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'hasil',
        'kesimpulan',
        'saran',
        'berkas_pendukung',
        'status',
        'psikolog_id',
        'mas_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Konseling::class;
    }
}
