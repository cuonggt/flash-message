<?php

namespace Gtk\FlashMessage;

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
            'Gtk\FlashMessage\SessionStore',
            'Gtk\FlashMessage\LaravelSessionStore'
        );

        $this->app->singleton('flash', function () {
            return $this->app->make('Gtk\FlashMessage\Flash');
        });
    }
}
