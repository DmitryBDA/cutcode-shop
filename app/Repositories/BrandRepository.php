<?php

namespace App\Repositories;

use App\Models\Brand as Model;

class BrandRepository extends CoreRepository
{

    protected function createModel(): Model
    {
        return new Model();
    }

    public function getBrandListForMainPage()
    {

        $brands = $this->start()
            ->where('show_main', true)
            ->orderBy('sort_order')
            ->limit(6)
            ->get();

        return $brands;
    }
}
