<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;

class FolioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Folio::path(resource_path('views/pages/public'))->middleware([
            '*' => [
                //
            ],
        ]);
        Folio::path(resource_path('views/pages/authorized'))->middleware([
            '*' => [
                'auth:sanctum',
                config('jetstream.auth_session'),
                'verified',
            ],
        ]);
    }
}
