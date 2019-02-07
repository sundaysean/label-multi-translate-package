<?php

namespace KRAVANH\LabelMultiTranslate;

use Illuminate\Support\ServiceProvider;
use Illuminate\Events\Dispatcher;

class LanguageTranslationServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . '/views', 'label-multi-translate');

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

    }

    public function register()
    {
        
        app(Dispatcher::class)->listen('voyager.admin.routing', function ($router) {

            require __DIR__ . '/routes/web.php';

        });

    }

}