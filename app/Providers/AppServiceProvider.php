<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Production runs behind a TLS-terminating nginx proxy. Force https on
        // generated URLs so asset()/url()/route() never emit mixed content.
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
