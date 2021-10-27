<?php

namespace App\Controllers;
session_start();

require_once 'autoloader-for-ajax.php';

use Core\Controller;

class SessionsHandler extends Controller
{
    /**
     * Class 'SessionsHandler' contains the methods to handle all $_SESSIONS for this app
     */

    /**
     * Set session
     * @param string $sessionName The name of the session
     * @param string $value The value of the session
     */
    public static function setSession(string $sessionName, $value)
    {

        switch ($sessionName) {

            case "user" :

                $_SESSION['user'] = $value;
                echo "<script>location.reload();</script>";
                break;

            case "amount-of-tasks" :

                $_SESSION['amount-of-tasks'] = $value;
                break;

            default : echo "<h4>SessionHandler: Something went wrong!</h4>";
        }
    }

    /**
     * Unset the current $_SESSIONS if there are no items in it
     * @param string $sessionName The name of the current $_SESSION
     *
     * Usage:
     *    self::unsetSession($sessionName);
     */
    public static function unsetSession(string $sessionName)
    {
        switch($sessionName) {

            case "user" :
              unset($_SESSION[$sessionName]);
              unset($_SESSION['amount-of-tasks']);
              echo "<script>location.reload();</script>";
              break;

            default : echo "<h4>SessionHandler: Something went wrong!</h4>";
        }
    }
}

if ($_POST['unsetSession']) {

    $sessionName = $_POST['sessionName'];
    SessionsHandler::unsetSession($sessionName);
}
