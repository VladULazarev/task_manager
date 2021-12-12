<?php

namespace App\Controllers;

use Core\Controller;

class ErrorController extends Controller
{
		/**
		 * If a webpage or data from DB were not found
		 */
		public static function notFound()
		{
				echo "<script>location='/404.php';</script>";
		}

		/**
     * Shows alert message - 'Wrong symbol or empty' and shows 'red border' for the current input field
		 *
		 * @param string $param Identifier of the current input field
		 *  Example: if id of the field is id="contact-name"
		 *		we have $param = "contact-name"
     */
		public static function showMessageAlertAndAlertBorder(string $param)
		{
				echo "<script>$('.{$param}-alert').fadeTo(500, 1); $('#{$param}').removeClass('input-ok-border').addClass('alert-border');</script>";
		}

		/**
     * Shows 'green border' if input is OK for the current input field
		 *
		 * @param string $param Identifier of the current input field
		 *  Example: if id of the field is or id="contact-name"
		 *		we have $param = "contact-name"
     */
		public static function showInputOkBorder($param)
		{
				echo "<script>$('#{$param}').removeClass('alert-border').addClass('input-ok-border');</script>";
		}

		/**
     * Shows the messages from 'add-user-form'
     */
		public static function showPopupMessageFromAddUserForm($param)
		{
			echo "<script>
								$('.add-user-form-pop-up').empty();
								$('.add-user-form-messages').load('/app/includes/popup-messages/add-user-form/{$param}.html');
								$('.form-messages').fadeTo(300, 1);
								$('input, textarea').removeClass('input-ok-border');
						</script>
					 ";
		}

		/**
     * Shows the messages from 'signin-user-form'
     */
		public static function showPopupMessageFromSigninUserForm($param)
		{
			echo "<script>
								$('.user-signin-form-pop-up').empty();
								$('.user-signin-form-messages').load('/app/includes/popup-messages/user-signin-form/{$param}.html');
								$('.form-messages').fadeTo(300, 1);
								$('input, textarea').removeClass('input-ok-border');
						</script>
					 ";
		}

		/**
     * Shows the messages from 'add-new-task-form'
     */
		public static function showPopupMessageFromAddNewTaskForm($param)
		{
			echo "<script>
								$('.new-task-form-pop-up').empty();
								$('.new-task-form-messages').load('/app/includes/popup-messages/new-task-form/{$param}.html');
								$('.form-messages').fadeTo(300, 1);
								$('textarea').val('');
						</script>
					 ";
		}

		/**
		 * Shows the messages from 'add-new-task-form'
		 */
		public static function showPopupMessageIfTaskWasDeleted($taskId)
		{
			echo $taskId;

		}
}
