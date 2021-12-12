<?php

namespace Core;

class App
{
    /**
     * Starts the Application
     *
     *  Usage:
     *    Core\App::run();
     */
    public static function run()
    {

        // Loads 'view' according to 'ROUTE[0]', see Core\Router.pnp

            // Example: current uri: http://domain.com/
            // ROUTE[0] = 'home'
            // Path to view is: $path = "home/home-page-content"

            $path = ROUTE[0] . "/" . ROUTE[0] . "-page-content";
            View::render($path, $data = NULL);
    }
}
