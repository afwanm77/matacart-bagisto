<?php

namespace MataCart\Core\Providers;

use Illuminate\Support\ServiceProvider;

class MataCartServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/matacart.php', 'matacart'
        );
    }

    public function boot()
    {
        $this->loadViewsFrom(
            __DIR__ . '/../Resources/views', 'matacart'
        );

        $this->loadTranslationsFrom(
            __DIR__ . '/../Resources/lang', 'matacart'
        );

        $this->loadMigrationsFrom(
            __DIR__ . '/../Database/Migrations'
        );
    }
}
