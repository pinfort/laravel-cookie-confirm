<?php

namespace Pinfort\LaravelCookieConfirm;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class CookieConfirmServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // view
        $this->loadViewsFrom(__DIR__.'/views', 'CookieConfirm');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/CookieConfirm'),
        ]);

        // lang
        $this->loadTranslationsFrom(__DIR__.'/translations', 'CookieConfirm');
        $this->publishes([
            __DIR__.'/translations' => resource_path('lang/vendor/CookieConfirm'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
