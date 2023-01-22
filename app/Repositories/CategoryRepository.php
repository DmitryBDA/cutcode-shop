<?php

namespace App\Repositories;

use App\Models\Category as Model;

class CategoryRepository extends CoreRepository
{

    protected function createModel(): Model
    {
        return new Model();
    }

    public function getCategoriesListForMainPage()
    {

        $categories = $this->start()
            ->where('show_main', true)
            ->orderBy('sort_order')
            ->limit(10)
            ->get();

        return $categories;
    }
}
