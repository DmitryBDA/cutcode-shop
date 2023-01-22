<?php

namespace App\Http\ViewComposers;

use App\Models\Menu;
use App\Services\MemoryCache;
use Illuminate\View\View;
class MenuComposer
{
    use MemoryCache;
    public $menu;
    public $path;
    /**
     * Create a menu composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menu = $this->menu();
//        $this->path = $this->path();
    }
    public function path()
    {
        return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    }
    public function menu()
    {
        // get from cache or database
        $item = $this->cache(function() {
            return Menu::whereActive('1')->orderBy('position')->get();
        });
        return $item;
    }
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menu', $this->menu);
//        $view->with('path', $this->path);
    }
}
