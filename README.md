# FacebookServiceProvider

Facebook SDK v5 Service Provider for Silex 

## Requirements
silex 1.x

## Installation
The best way to install FacebookServiceProvider is to use a [Composer](https://getcomposer.org/download):

    php composer.phar require junker/facebook-service-provider

## Examples

```php
use HSAL\HSAL;
use Junker\Silex\Provider\FacebookServiceProvider;

$app->register(new FacebookServiceProvider(), [
    'facebook.options' => [
        'app_id' => 'my App id',
        'app_secret' => 'my App secret key',
        'default_graph_version' => 'v2.10',
        'default_access_token' => '{access-token}' // optional
    ]
]);

    $response = $app['facebook']->get('/me', '{access-token}');

```

## Documentation

[Facebook PHP Documentation](https://github.com/facebook/php-graph-sdk/tree/5.x/docs)

