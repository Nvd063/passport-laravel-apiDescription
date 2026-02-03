<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Schema;

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
        Schema::defaultStringLength(191);

        Passport::tokensExpireIn(Carbon::now()->addMinutes(5));           
        Passport::refreshTokensExpireIn(Carbon::now()->addMinutes(10));    
        Passport::personalAccessTokensExpireIn(Carbon::now()->addDays(30));
    }
}
