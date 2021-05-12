<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{




    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
{
   if (env('REDIRECT_HTTPS')) {
       $this->app['request']->server->set('HTTPS', true);
   }
}

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {

    if (env('REDIRECT_HTTPS')) {
        $url->formatScheme('https://');
     }

        Route::resourceVerbs([
            'create' => 'crear',
            'edit' => 'editar'
            ]);

        Paginator::useBootstrap();

    }

}
