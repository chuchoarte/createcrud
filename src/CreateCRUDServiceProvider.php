<?php

namespace jespitia\createcrud;

use Illuminate\Support\ServiceProvider;

class CreateCRUDServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/Http/routes.php';
        $this->loadViewsFrom(__DIR__.'/views/artisan-commands', 'artisan-commands');

        $this->publishes([
            __DIR__.'/views/artisan-commands' => resource_path('views/vendor/artisan-commands'),
            __DIR__.'/Routing' => app_path('/Routing/'),
        ]);

        //$this->setupRoutes($this->app->router);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require __DIR__ . '/Http/routes.php';
        $this->app->make('jespitia\createcrud\Http\Controllers\CreateCRUDController');
        $this->commands([
            'jespitia\createcrud\Commands\customController'
        ]);
    }

}
