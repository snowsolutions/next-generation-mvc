<?php

namespace App\Repositories\System;

use App\Models\System\Configuration;
use App\Repositories\BaseRepository;

class ConfigurationRepository extends BaseRepository
{
    protected string $model = Configuration::class;
}
