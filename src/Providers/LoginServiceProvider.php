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
        ]);
        $this->publishes([
            __DIR__.'/../config/login.php' => config_path('login.php'),
        ], 'login.config');
    }
}
