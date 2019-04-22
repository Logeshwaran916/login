<?php

namespace Shudanti\Login\Provider;

use Illuminate\Support\ServiceProvider;

class LoginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Shudanti\Login\Controllers\LoginController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'shudanti');
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/shudanti/login'),
        ], 'test');
        $this->publishes([
            __DIR__.'/../config/test_login.php' => config_path('test_login.php'),
        ], 'test');
    }
}
