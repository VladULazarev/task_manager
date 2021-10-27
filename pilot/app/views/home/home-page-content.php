<?php session_start();
/**
 * 'View' for the Home page
 * @link https://domain.com
 *
 */

// If user not logged in
if (!$_SESSION['user']) {

    include ('login-signin.php');
    
// If logged in
} else {
    include ('tasks.php');
}
 ?>
