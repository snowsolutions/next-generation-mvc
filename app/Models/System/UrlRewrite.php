<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlRewrite extends Model
{
    protected $table = 'system_url_rewrites';

    use HasFactory;
}
