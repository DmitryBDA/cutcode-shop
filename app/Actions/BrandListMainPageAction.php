<?php

namespace App\Actions;

use App\Contracts\BrandListActionContract;
use App\Repositories\BrandRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\Collection;

class BrandListMainPageAction implements BrandListActionContract
{
    private mixed $repository;

    public function __construct()
    {
        $this->repository = app(BrandRepository::class);
    }


    public function __invoke(): Collection
    {
        return $this->repository->getBrandListForMainPage();
    }
}
