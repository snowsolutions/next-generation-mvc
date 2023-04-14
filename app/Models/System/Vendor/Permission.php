<?php

namespace App\Models\System\Vendor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'system_vendor_permissions';

    use HasFactory;
}
