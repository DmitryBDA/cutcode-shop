<?php

namespace App\Actions;

use App\Contracts\CategoryListActionContract;
use App\Contracts\ProductListActionContract;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\Collection;

class ProductListMainPageAction implements ProductListActionContract
{
    private mixed $repository;

    public function __construct()
    {
        $this->repository = app(ProductRepository::class);
    }


    public function __invoke(): Collection
    {
        return $this->repository->getProductsListForMainPage();
    }
}
