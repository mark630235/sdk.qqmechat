<?php

namespace Qmechat\ApiGateway\Qmechat;

use Freyo\ApiGateway\Application as BaseApplication;

class Application extends BaseApplication
{

    /**
     * @var array
     */
    protected $providers = [
        Qmechat\ServiceProvider::class
    ];

}