<?php

namespace App\Providers;

use Foo;
use Illuminate\Support\ServiceProvider;

class FooBarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Foo::class, function () {
            return new Foo();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
