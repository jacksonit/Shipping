<?php

namespace Jacksonit\Shipping;

use Illuminate\Support\ServiceProvider;

/**
 * ServiceProvider
 *
 * The service provider for the modules. After being registered
 * it will make sure that each of the modules are properly loaded
 * i.e. with their routes, views etc.
 *
 * @author Cao Son <son.caoxuan92@gmail.com>
 * @package Jacksonit\GHN
 */
class ShippingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish config files
        $this->publishes([
            __DIR__ . '/config/shipping.php' => config_path('shipping.php'),
        ]);
    }

    public function register()
    {
        $this->app->bind('GHN', GHN::class);
    }
}