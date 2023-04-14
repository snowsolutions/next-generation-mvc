<?php

namespace App\Models\System\Vendor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'system_vendor_invoices';

    use HasFactory;
}
