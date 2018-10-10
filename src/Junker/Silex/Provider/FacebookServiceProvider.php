<?php
namespace Junker\Silex\Provider;
use Silex\Application;
use Silex\ServiceProviderInterface;
use Junker\Silex\Facebook\PersistentDataHandler;

class FacebookServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['facebook'] = $app->share(function(Application $app) {
            $options = $app['facebook.options'];

            if (!isset($options['persistent_data_handler']))
                $options['persistent_data_handler'] = new PersistentDataHandler($app);
            
            $fb = new \Facebook\Facebook($options);

            return $fb;
        });
    }
    public function boot(Application $app)
    {
    }
}
