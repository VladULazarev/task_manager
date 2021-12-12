<?php

namespace Core;

use App\Controllers\ErrorController;

class Router
{
    use Validator;

    /**
     * Set the constant 'ROUTE'
     */
    const ROUTE = [];

    /**
     * Defines the constant 'ROUTE' and its array from $_SERVER['REQUEST_URI']
     *
     * Constant 'ROUTE' determines the foloowing routes:
     * ROUTE['home']
     *
     * Note: we have only one 'Route' for this app
     *
     * @return array constant 'ROUTE' for the current webpage
     * @throws ErrorController if $uriParts does not match
     */
    public static function getRoute(): array
    {

        $uriParts = explode('/', $_SERVER['REQUEST_URI']);

        if(!$uriParts[1]) {

            /**
             * It means we have the following uri:
             *
             * Example: http://domainname.com
             */
            define('ROUTE', ['home']);

        } elseif ($uriParts[1] && !$uriParts[2]) {

            /**
             * It means we have the following uri:
             *
             * Example: http://domainname.com/something-bad
             *
             * Note: we have only one 'Route' for this app
             */

              return ErrorController::notFound();
        }

        return ROUTE;
    }
}
