<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegrationCredential extends Model
{
    protected $table = 'system_integration_credentials';

    use HasFactory;
}
