<?php

return [
    \App\Http\Controllers\Api\V2\CommercePlatform\ProductController::class => [
        \App\Contracts\Repository\CommercePlatform\ProductRepositoryContract::class => \App\Repositories\CommercePlatform\ProductRepository::class,
    ],
    \App\Http\Controllers\Api\V2\CommercePlatform\ProductConfigurableController::class => [
        \App\Contracts\Repository\CommercePlatform\ProductRepositoryContract::class => \App\Repositories\CommercePlatform\ProductConfigurableRepository::class,
    ],
    \App\Http\Controllers\Api\V2\CommercePlatform\ProductVirtualController::class => [
        \App\Contracts\Repository\CommercePlatform\ProductRepositoryContract::class => \App\Repositories\CommercePlatform\ProductVirtualRepository::class,
    ],
];
