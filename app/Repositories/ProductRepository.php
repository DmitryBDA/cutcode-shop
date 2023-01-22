<?php

namespace App\Repositories;

use App\Models\Product as Model;

class ProductRepository extends CoreRepository
{

    protected function createModel(): Model
    {
        return new Model();
    }

    public function getProductsListForMainPage()
    {

        $products = $this->start()
            ->where('show_main', true)
            ->orderBy('sort_order')
            ->limit(8)
            ->get();

        return $products;
    }
}
