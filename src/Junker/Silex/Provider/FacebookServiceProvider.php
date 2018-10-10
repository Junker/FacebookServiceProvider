<?php
namespace Junker\Silex\Provider;
use Silex\Application;
use Silex\ServiceProviderInterface;

class FacebookServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['facebook'] = $app->share(function(Application $app) {
            $options = $app['facebook.options'];
            
            $fb = new \Facebook\Facebook($options);

            return $fb;
        });
    }
    public function boot(Application $app)
    {
    }
}
