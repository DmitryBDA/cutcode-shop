<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'parts.menu',
            'App\Http\ViewComposers\MenuComposer'
        );
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
