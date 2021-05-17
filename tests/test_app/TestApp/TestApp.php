<?php

namespace App;

use Cake\Http\BaseApplication;
use Cors\Routing\Middleware\CorsMiddleware;

/**
 * Application setup class.
 *
 * This defines the bootstrapping logic and middleware layers you
 * want to use in your application.
 */
class Application extends BaseApplication
{
    /**
     * Load all the application configuration and bootstrap logic
     */
    public function bootstrap()
    {
        $this->addPlugin('Cors');
    }

    /**
     * Define the HTTP middleware layers for an application
     * @param \Cake\Http\MiddlewareQueue $middlewareQueue The middleware queue to set in your App Class
     * @return \Cake\Http\MiddlewareQueue
     */
    public function middleware($middlewareQueue)
    {
        return $middlewareQueue->add(new CorsMiddleware($this));
    }

    /**
     * Define the routes for an application
     * @param \Cake\Routing\RouteBuilder $routes A route builder to add routes into
     * @return void
     */
    public function routes($routes)
    {
        //Do nothing
    }
}
