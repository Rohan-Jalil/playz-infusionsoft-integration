<?php

namespace Agencymates\Playz;

use Illuminate\Support\ServiceProvider;

class PlayzServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([__DIR__.'/config' => config_path()]);
        // $this->loadMigrationsFrom(__DIR__.'/migrations/');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->mergeConfigFrom(__DIR__ . '/config/infusionsoft.php', 'infusionsoft');
    }
}
