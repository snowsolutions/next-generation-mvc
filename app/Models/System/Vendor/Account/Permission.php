<?php

namespace App\Models\System\Vendor\Account;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'system_vendor_account_permissions';

    use HasFactory;
}
