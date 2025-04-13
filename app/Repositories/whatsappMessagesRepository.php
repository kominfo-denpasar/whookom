<?php

namespace App\Repositories;

use App\Models\whatsappMessages;
use App\Repositories\BaseRepository;

class whatsappMessagesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'from',
        'pushname',
        'type',
        'caption',
        'is_group'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return whatsappMessages::class;
    }
}
