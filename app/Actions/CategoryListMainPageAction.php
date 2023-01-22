<?php

namespace App\Actions;

use App\Contracts\CategoryListActionContract;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Collection;

class CategoryListMainPageAction implements CategoryListActionContract
{
    private mixed $repository;

    public function __construct()
    {
        $this->repository = app(CategoryRepository::class);
    }


    public function __invoke(): Collection
    {
        return $this->repository->getCategoriesListForMainPage();
    }
}
