<?php

namespace Junker\Silex\Facebook;
use Silex\Application;
use Facebook\PersistentData\PersistentDataInterface;


class PersistentDataHandler implements PersistentDataInterface
{
	const SESSION_PREFIX = 'FBRLH_';

	private $app;

	public function __construct(Application $app)
	{
		$this->app = $app;
	}

	public function get($key)
	{
		return $this->app['session']->get(self::SESSION_PREFIX.$key, NULL);
	}

	public function set($key, $value)
	{
		return $this->app['session']->set(self::SESSION_PREFIX.$key, $value);
	}
}