<?php

namespace Gradints\LaravelMidtrans;

use Illuminate\Support\ServiceProvider;

class MidtransServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/midtrans.php', 'midtrans');
        $this->loadRoutesFrom(__DIR__ . '/MidtransRoutes.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/midtrans.php' => config_path('midtrans.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/NotificationAction.php' => app_path('Services/PaymentGateway/NotificationAction.php'),
        ], 'action');
    }
}
