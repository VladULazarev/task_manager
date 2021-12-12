<?php

namespace App\Controllers;
session_start();

require_once 'autoloader-for-ajax.php';

use Core\Controller;
use Core\Validator;
use Core\Model;
use App\Models\Home\Users;
use App\Controllers\SessionsHandler;

class LoginController extends Controller
{
    /**
     * See below how the $_POST is handled
     *
     * @see The $_POST comes from: /app.js -- 7. Add new user
    */

    /**
     * Checks input fields from the Form
     *
     * @return $error 'false' if there are no 'bad' symbols, otherwise 'true'
     * Usage: LoginController::checkFormInputFields();
     */
    public static function checkFormInputFields()
    {
        // Set variables from $_POST
        $userLogin = $_POST['userLogin'];
        $userName = $_POST['userName'];
        $userLastName = $_POST['userLastName'];
        $userEmail = $_POST['userEmail'];
        $userPw = $_POST['userPw'];

        // Set var $errors as 'false', means there are no 'bad' characters from input fields
        $error = false;

        // Check if $userLogin has 'bad' characters or the length > 50 characters or empty
        if (!Validator::checkName($userLogin) ||
            !Validator::checkLength($userLogin, 50)
        ) {
            
            ErrorController::showMessageAlertAndAlertBorder('user-login');
            $error = true;
        } else {

            ErrorController::showInputOkBorder('user-login');
        }

        // Check if $userName has 'bad' characters or the length > 50 characters or empty
        if (!Validator::checkName($userName) ||
            !Validator::checkLength($userName, 50)
        ) {

            ErrorController::showMessageAlertAndAlertBorder('user-name');
            $error = true;
        } else {

            ErrorController::showInputOkBorder('user-name');
        }

        // Check if $userLastName has 'bad' characters or the length > 50 characters or empty
        if (!Validator::checkName($userLastName) ||
            !Validator::checkLength($userLastName, 50)
        ) {

            ErrorController::showMessageAlertAndAlertBorder('user-last-name');
            $error = true;
        } else {

            ErrorController::showInputOkBorder('user-last-name');
        }

        // Check if $userEmail has 'bad' characters or the length > 50 characters or empty
        if (!Validator::checkEmail($userEmail) ||
            !Validator::checkLength($userEmail, 50)
        ) {

            ErrorController::showMessageAlertAndAlertBorder('user-email');
            $error = true;
        } else {

            ErrorController::showInputOkBorder('user-email');
        }

        // Check if $userPw has 'bad' characters
        if (!Validator::checkPassword($userPw)) {

            ErrorController::showMessageAlertAndAlertBorder('user-pw');
            $error = true;
        } else {

            ErrorController::showInputOkBorder('user-pw');
        }

          return $error;
    }

    // Check if '$userEmail' already exists
    public static function checkIfEmailAlreadyExist()
    {
        // Set variables from $_POST
        $userEmail = trim($_POST['userEmail']);

        // Set '$error', 'false' means no errors so far
        $error = false;

        // Set object for Core\Model
        $modelObj = new Model();

        // Check 'email'
        $checkUserEmail = $modelObj->checkIfCellValueExists('id', 'users', 'email', $userEmail);

        // If the email already exists
        if ($checkUserEmail) {

            $error = true;
        }

        return $error;

    }

    // Check if '$userPw' already exists
    public static function checkIfPasswordAlreadyExist()
    {
        // Set $userPw from $_POST
        $userPw = trim($_POST['userPw']);

        // Set password hash
  			$userPw = hash('ripemd160', $userPw);

        // Set '$error', 'false' means no errors so far
        $error = false;

        // Set object for Core\Model
        $modelObj = new Model();

        // Check 'password'
        $checkUserPw = $modelObj->checkIfCellValueExists('id', 'users', 'password', $userPw);

        // if '$userPw' already exists
        if ($checkUserPw) {

            $error = true;
        }

        return $error;

    }

    /**
     * Insert the new user into DB table
     */
    public static function addUserIntoDB()
    {
        // Set variables from $_POST
        $userLogin = trim($_POST['userLogin']);
        $userName = trim($_POST['userName']);
        $userLastName = trim($_POST['userLastName']);
        $userEmail = trim($_POST['userEmail']);
        $userPw = trim($_POST['userPw']);

        // Set password hash
    		$userPw = hash('ripemd160', $userPw);

        // Set object
        $modelObj = new Users();

        // Insert the data into 'users' table
        $modelObj->addNewUser($userLogin, $userName, $userLastName, $userEmail, $userPw);

        ErrorController::showPopupMessageFromAddUserForm('user-was-added');

        // Set $_SESSION for current user
        SessionsHandler::setSession('user', $userLogin);
      }
}

// -------------------------------------------------- 1. If a form was submited
if (isset($_POST['addUser'])) {

	// Stop script if $error == true
	if (LoginController::checkFormInputFields()) {

			// Remove 'load img' and '.contact-form-messages'
			echo "<script>$('.add-user-form-pop-up, .add-user-form-messages').empty();</script>";

			// For debugging
				 //echo "<h1>Something went wrong!</h1>";
				 exit();

	// Stop script if '$userEmail' already exists
  } elseif (LoginController::checkIfEmailAlreadyExist()) {

      ErrorController::showPopupMessageFromAddUserForm('email-exists');

      echo "<script>$('.form-messages').empty();</script>";

      exit();

  // Stop script if '$userPw' already exists
  } elseif (LoginController::checkIfPasswordAlreadyExist()) {

        ErrorController::showPopupMessageFromAddUserForm('password-exists');

        echo "<script>$('.form-messages').empty();</script>";

        exit();

  // If OK insert the new user into DB table
  } else {

	     LoginController::addUserIntoDB();
	}

// If something went wrong
} else {

    ErrorController::showPopupMessageFromAddUserForm('something-went-wrong');

    echo "<script>$('input').val('');$('.form-messages').empty();</script>";

    exit();
}
