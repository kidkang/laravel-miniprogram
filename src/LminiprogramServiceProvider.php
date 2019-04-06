<?php

namespace Kd\Lminiprogram;

use Illuminate\Support\ServiceProvider;

class LminiprogramServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config.php' => config_path('miniprogram.php'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('miniprogram', function ($app) {
            return new Miniprogram($app['config']);
        });
    }
     public function provides()
    {
        return ['miniprogram'];
    }
}
