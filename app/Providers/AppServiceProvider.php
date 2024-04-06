<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Auth\ComunityGuard;
use App\Models\Comunity;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    //  Auth::extend('comunity', function ($app, $name, array $config) {
    //     return new ComunityGuard(
    //         $name,
    //         Auth::createUserProvider($config['provider']),
    //         $app['session.store']
    //     );
    //  });
    }
}
