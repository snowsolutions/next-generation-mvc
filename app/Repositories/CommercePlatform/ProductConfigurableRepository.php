<?php

namespace App\Repositories\CommercePlatform;

use App\Models\CommercePlatform\Product;
use App\Repositories\BaseRepository;

class ProductConfigurableRepository extends BaseRepository
{
    protected string $model = Product::class;

    public function findById($id)
    {
        return $this->instance::where([
            'type' => 'configurable',
            'id' => $id,
        ])->first();
    }

    public function findAll()
    {
        return $this->instance::all()->where('type', 'configurable');
    }
}
