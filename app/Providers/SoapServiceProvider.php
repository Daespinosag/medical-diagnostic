<?php

namespace App\Providers;

use App\Soap\OfiClinicDataRecovery;
use Illuminate\Support\ServiceProvider;

class SoapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('OfiClinic', function () {
            return new OfiClinicDataRecovery;
        });
    }
}
