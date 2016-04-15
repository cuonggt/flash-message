<?php

namespace GTK\FlashMessage;

use Illuminate\Support\ServiceProvider;

class FlashMessageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'GTK\FlashMessage\SessionStore',
            'GTK\FlashMessage\LaravelSessionStore'
        );

        $this->app->singleton('flash', function () {
            return $this->app->make('GTK\FlashMessage\Flash');
        });
    }
}
