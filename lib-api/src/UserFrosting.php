<?php declare(strict_types=1);

/*
* UserFrosting (http://www.userfrosting.com)
*
* @link      https://github.com/userfrosting/UserFrosting
* @copyright Copyright (c) 2020 Alexander Weissman
* @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
*/

namespace UserFrosting\System;

use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Slim\ResponseEmitter;
use UserFrosting\System\Sprinkles\Sprinkle;
use UserFrosting\System\CLI;

/**
 * UserFrosting main class.
 */
class UserFrosting
{
    /**
     * @var App The Slim application instance.
     */
    protected $app;

    protected function __construct()
    {
        $this->app = AppFactory::create();
    }

    /**
     * Starts the app in CLI mode and returns an instance to integrate with.
     * The `bakery` CLI uses this.
     */
    public function cli(): CLI
    {
        return new CLI();
    }

    /**
     * Fires off web request handling.
     * Once this has returned, the response will have been sent.
     */
    public function web(): void
    {

    }

    /**
     * Fires off application lifecycle.
     * Once this has returned, the response will have been sent.
     */
    public function start(): void
    {
        $this->setupApp();
        $this->handleRequest();
    }

    public function registerSprinkle(Sprinkle $sprinkle): void
    {

    }

    /**
     * Setup UserFrosting App, load sprinkles, load routes, etc.
     */
    protected function setupApp(): void
    {
        // Error middleware
        // TODO: Move/Remove this, used to assist debugging
        $this->app->addErrorMiddleware(true, false, false);

        // TODO Load configuration

        //
    }

    /**
     * Creates the request and response objects.
     */
    protected function handleRequest(): void
    {
        // Generate request object
        $request = ServerRequestCreatorFactory::create()
            ->createServerRequestFromGlobals();

        // Generate response
        $response = $this->app->handle($request);

        // Send to client
        (new ResponseEmitter())
            ->emit($response);
    }
}
