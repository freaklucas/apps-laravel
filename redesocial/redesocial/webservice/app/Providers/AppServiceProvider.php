<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\HasApiTokens;
use Laravel\Passport\Bridge\AccessToken;
use Laravel\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        // Passport::hashClientSecrets();
    }
}
