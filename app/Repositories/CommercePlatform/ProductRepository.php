<?php

namespace App\Repositories\CommercePlatform;

use App\Models\CommercePlatform\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository
{
    protected string $model = Product::class;
}
