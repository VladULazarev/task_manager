<?php

namespace App\Controllers;
session_start();

require_once 'autoloader-for-ajax.php';

use Core\Controller;
use Core\Validator;
use Core\Model;
use App\Models\Home\Users;
use App\Controllers\SessionsHandler;

class SigninController extends Controller
{
    /**
     * See below how the $_POST is handled:
     *
     * @see The $_POST comes from: /app.js -- 8. User sign in
    */

    /**
     * Check input fields from the Form
     *
     * @return $error 'false' if there are no 'bad' symbols, otherwise 'true'
     * Usage: SigninController::checkFormInputFields();
     */
    public static function checkFormInputFields()
    {
        // Set variables from $_POST
        $userEmailSignin = $_POST['userEmailSignin'];
        $userPwSignin = $_POST['userPwSignin'];

        // Set var $errors as 'false', means there are no 'bad' characters from input fields
        $error = false;

        // Check if $userEmailSignin has 'bad' characters or the length > 50 characters or empty
        if (!Validator::checkEmail($userEmailSignin) ||
            !Validator::checkLength($userEmailSignin, 50)
        ) {

            ErrorController::showMessageAlertAndAlertBorder('user-email-signin');
            $error = true;
        } else {

            ErrorController::showInputOkBorder('user-email-signin');
        }

        // Check if $userPwSignin has 'bad' characters
        if (!Validator::checkPassword($userPwSignin)) {

            ErrorController::showMessageAlertAndAlertBorder('user-pw-signin');
            $error = true;
        } else {

            ErrorController::showInputOkBorder('user-pw-signin');
        }

          return $error;
    }

    // Check if '$userEmailSignin'  exists
    public static function checkIfEmailAlreadyExist()
    {
        // Set variables from $_POST
        $userEmailSignin = trim($_POST['userEmailSignin']);

        // Set '$error', 'false' means no errors so far
        $error = false;

        // Set object for Core\Model
        $modelObj = new Model();

        // Check 'email'
        $checkUserEmail = $modelObj->checkIfCellValueExists('id', 'users', 'email', $userEmailSignin);

        // If $userEmailSignin exists it is 'OK'
        if ($checkUserEmail) {

            $error = false;
        } else {
            $error = true;
        }

        return $error;

    }

    // Check if '$userPwSignin'  exists
    public static function checkIfPasswordAlreadyExist()
    {
        // Set $userPw from $_POST
        $userPwSignin = trim($_POST['userPwSignin']);

        // Set password hash
  			$userPwSignin = hash('ripemd160', $userPwSignin);

        // Set '$error', 'false' means no errors so far
        $error = false;

        // Set object for Core\Model
        $modelObj = new Model();

        // Check 'password'
        $checkUserPw = $modelObj->checkIfCellValueExists('id', 'users', 'password', $userPwSignin);

        // If $checkUserPw exists it is 'OK'
        if ($checkUserPw) {

            $error = false;
        } else {
            $error = true;
        }

        return $error;

    }

}

// --------------------------------------------------- 1. If form was submited
if (isset($_POST['signinUser'])) {

	// Stop script if $error == true
	if (SigninController::checkFormInputFields()) {

			// Remove 'load img' and '.contact-form-messages'
			echo "<script>$('.user-signin-form-pop-up, .user-signin-form-messages').empty();</script>";

			// For debugging
				 //echo "<h1>Something went wrong!</h1>";
				 exit();

	// If 'Not OK', means '$error = true'
} elseif (SigninController::checkIfEmailAlreadyExist()) {

      ErrorController::showPopupMessageFromSigninUserForm('email-not-exists');

      echo "<script>$('.form-messages').empty();</script>";

      exit();

  // If 'Not OK', means '$error = true'
} elseif (SigninController::checkIfPasswordAlreadyExist()) {

        ErrorController::showPopupMessageFromSigninUserForm('password-not-exists');

        echo "<script>$('.form-messages').empty();</script>";

        exit();

  // * If OK, means '$error = false'
  } else {

     // We need to get '$userLogin'
     $userEmailSignin = trim($_POST['userEmailSignin']);

     $modelObj = new Model();
     $getUserLogin = $modelObj->getCellValue('users', 'login', 'email', $userEmailSignin);

     $userLogin = $getUserLogin->login;

     // Set 'session' for the current user
	   SessionsHandler::setSession('user', $userLogin);
	}

// If something went wrong
} else {

    ErrorController::showPopupMessageFromAddUserForm('something-went-wrong');

    echo "<script>$('input').val('');$('.form-messages').empty();</script>";

    exit();
}
