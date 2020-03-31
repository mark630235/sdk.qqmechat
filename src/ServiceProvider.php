<?php

namespace Qmechat\ApiGateway\Qmechat;

use Freyo\ApiGateway\ServiceProvider as BaseServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app instanceof LumenApplication) {
            $this->app->configure('apigateway-qmechat');
        }

        $this->mergeConfigFrom(
            __DIR__.'/../config/apigateway.php', 'apigateway-qmechat'
        );

        $this->app->singleton('apigateway.qmechat', function ($app) {
            return new Application(
                $app['config']['apigateway-qmechat']
            );
        });
    }

    /**
     * Register the application's event listeners.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}