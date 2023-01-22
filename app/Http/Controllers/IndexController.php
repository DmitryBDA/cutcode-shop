<?php

namespace App\Http\Controllers;

use App\Contracts\BrandListActionContract;
use App\Contracts\CategoryListActionContract;
use App\Contracts\ProductListActionContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    /**
     * @param CategoryListActionContract $categoryListMainPageAction
     * @param ProductListActionContract $productListActionContract
     * @return Application|Factory|View
     */
    public function index(
        CategoryListActionContract $categoryListMainPageAction,
        ProductListActionContract $productListMainPageAction,
        BrandListActionContract $brandListMainPageAction
    ): View|Factory|Application {
        $categories = $categoryListMainPageAction();
        $products = $productListMainPageAction();
        $brands = $brandListMainPageAction();

        return view('pages.index', compact(['categories', 'products', 'brands']));
    }
}
