<?php

namespace Qmechat\ApiGateway\Qmechat;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['qmechat_client'] = function ($app) {
            return new Client($app);
        };
    }
}