# qcloud-apigateway-http

## Requirement

1. PHP >= 5.6
2. **[Composer](https://getcomposer.org/)**
3. openssl 拓展

## Installation

```shell
$ composer require qqmylife/sdk.payment -vvv
```

For develop:

```shell
$ composer require qqmylife/sdk.payment:dev-master -vvv
```

## Usage

```php
<?php

include 'vendor/autoload.php';

use QLife\ApiGateway\Payment;

$app = new Application([
    'response_type' => 'collection',
    'secret_key'    => 'your-secret-key',
    'secret_id'     => 'your-secret-id',
    'log'           => [
        'file'  => __DIR__ . DIRECTORY_SEPARATOR . 'apigateway.log',
        'level' => 'debug',
    ],
    'http' => [
        'base_uri' => 'http://{id}.{region}.apigateway.myqcloud.com',
    ],
]);

$response = $app->order->unify([
    //...
]);

var_dump($response);
```

## License

MIT
