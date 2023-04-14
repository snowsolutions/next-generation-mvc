<?php

namespace App\Repositories\CommercePlatform;

use App\Models\CommercePlatform\Product;
use App\Repositories\BaseRepository;

class ProductVirtualRepository extends BaseRepository
{
    protected string $model = Product::class;

    public function findById($id)
    {
        return $this->instance::where([
            'type' => 'virtual',
            'id' => $id,
        ])->first();
    }

    public function findAll()
    {
        return $this->instance::all()->where('type', 'virtual');
    }
}
