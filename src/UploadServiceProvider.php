<?php

namespace Duc\Upload;

use Illuminate\Support\ServiceProvider;

class UploadServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/router.php');
        $this->loadViewsFrom(__DIR__.'/views', 'UploadFile');

        if (! $this->app->routesAreCached()) {
            require __DIR__.'/router.php';
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*include __DIR__.'/router.php';
        $this->app->make('UploadFileController');*/
    }
}
