<?php

namespace App\Repositories;

use App\Models\Log;
use App\Repositories\BaseRepository;

class LogRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'log_name',
        'description',
        'subject_type',
        'event',
        'subject_id',
        'causer_type',
        'causer_id',
        'properties',
        'batch_uuid'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Log::class;
    }
}
