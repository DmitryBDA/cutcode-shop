<?php

namespace App\Providers;

use App\Actions\BrandListMainPageAction;
use App\Actions\CategoryListMainPageAction;
use App\Actions\ProductListMainPageAction;
use App\Contracts\BrandListActionContract;
use App\Contracts\CategoryListActionContract;
use App\Contracts\ProductListActionContract;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public array $bindings = [
        CategoryListActionContract::class => CategoryListMainPageAction::class,
        ProductListActionContract::class => ProductListMainPageAction::class,
        BrandListActionContract::class => BrandListMainPageAction::class,

    ];
}
