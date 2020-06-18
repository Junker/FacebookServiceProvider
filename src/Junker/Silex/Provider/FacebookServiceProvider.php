<?php
namespace Junker\Silex\Provider;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Junker\Silex\Facebook\PersistentDataHandler;

class FacebookServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['facebook'] = function($app) {
            $options = $app['facebook.options'];

            if (!isset($options['persistent_data_handler']))
                $options['persistent_data_handler'] = new PersistentDataHandler($app);

            $fb = new \Facebook\Facebook($options);

            return $fb;
        };
    }
}
