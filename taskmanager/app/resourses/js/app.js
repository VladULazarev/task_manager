/*
CONTENT

	1. Show form to register a new user
	2. Show form to sign in a user
	3. Click the buttin 'Log Out'
	4. Hide 'alert message' and 'alert border'
	5. If click 'ok' message
	6  If click 'Task added ok' message
	7. If click 'danger' message
	8. Add a new user
	9. Sign in
	10. If click 'Show all tasks'
	11. Show the form 'Add new task'
	12. Add a new task
	13. Delete a tack
	14. Click message 'Task was deleted'
*/

// --------------------------------------------------------- Document is ready
$(document).ready(function(){

// Variables
let shortTime  = 100;
let middleTime = 300;
let longTime   = 500;

// ------------------------------------ 1. Show the form to register a new user

$(".log-in").on('click', function() {

	$('.signin-user').fadeOut(shortTime, 0, function(){
			$('.add-user').fadeIn();
	});

});

// ----------------------------------------- 2. Show the form to sign in a user
$(".sign-in").on('click', function() {

	$('.add-user').fadeOut(shortTime, 0, function(){
			$('.signin-user').fadeIn();
	});

});

// ---------------------------------------------- 3. Click the buttin 'Log Out'
$(".log-out").on("click", function() {

		let sessionName = 'user';
		let unsetSession = 'unsetSession'; // $_POST identifier

		$.post("/app/controllers/SessionsHandler.php", {

				sessionName: sessionName,
				unsetSession: unsetSession

		}, function(data) {

					$("main").append(data);

		});
});

// -------------------------------- 4. Hide 'alert message' and 'alert border'
//	for the current field if it is 'on focus'

	$("input[id*=user]").on("focus", function() {

			$(this).next().fadeTo(middleTime, 0);
			$(this).removeClass("alert-border");

			$(".form-messages").empty();
	});

// -------------------------------------------------- 5. If click 'ok' message
$(document).on("click", ".btn-ok", function(){

		event.preventDefault();
		$(location).attr("href", "/");
});

// ---------------------------------------- 6 If click 'Task added ok' message
$(document).on("click", ".btn-task-added-ok", function(){

	event.preventDefault();
	$(".form-messages").empty();
});

// ---------------------------------------------- 7. If click 'danger' message
$(document).on("click", ".btn-danger", function(){

		  event.preventDefault();
			$(".form-messages").empty();
});

// ---------------------------------------------------------- 8. Add a new user

// Click 'btn-add-user' button
$(".btn-add-user").on('click', function(event) {

		event.preventDefault();

		// Remove 'alert message' and 'alert border' if there are any
		$("span[class*=alert]").fadeTo(middleTime, 0);
		$("input").removeClass("alert-border");

		// Set variables
		let userLogin = $("#user-login").val();
		let userName = $("#user-name").val();
		let userLastName = $("#user-last-name").val();
		let userEmail = $("#user-email").val();
		let userPw = $("#user-pw").val();
		let addUser = "add-user"; // The $_POST identifier

		// Load 'load img' while the script is loading
		$(".add-user-form-pop-up").load("/app/includes/wait-for-load-is-done.html");

		// Set timeout to show the 'load img' above while the script is loaded
		setTimeout(function(){

				// Load the script
				$(".add-user-form-messages").load("/app/controllers/LoginController.php", {

						userLogin: userLogin,
						userName: userName,
						userLastName: userLastName,
						userEmail: userEmail,
						userPw: userPw,
						addUser: addUser
				});

		}, longTime);
});

// ---------------------------------------------------------------- 9. Sign in

// Click btn-signin-user button
$(".btn-signin-user").on('click', function(event) {

		event.preventDefault();

		// Remove 'alert message' and 'alert border' if there are any
		$("span[class*=alert]").fadeTo(middleTime, 0);
		$("input").removeClass("alert-border");

		// Set variables
		let userEmailSignin = $("#user-email-signin").val();
		let userPwSignin = $("#user-pw-signin").val();
		let signinUser = "signin-user"; // The $_POST identifier

		// Load 'load img'
		$(".user-signin-form-pop-up").load("/app/includes/wait-for-load-is-done.html");

		// Set timeout while the script is loading
		setTimeout(function(){

				// Load the script
				$(".user-signin-form-messages").load("/app/controllers/SigninController.php", {

						userEmailSignin: userEmailSignin,
						userPwSignin: userPwSignin,
						signinUser: signinUser
				});

		}, longTime);
});

// ---------------------------------------------- 10. If click 'Show all tasks'
// Click button 'Show all tasks' or a pagination link
$(document).on("click", ".show-tasks, .page-link", function(event){

		// Get the height of '.content'
		let tabContentHeight = $(".content").height();

		// To hold the height of .content
		$(".content").css({'height': tabContentHeight});

		// Hide previous results
		$('.content').empty();
		$('.add-new-task').css({'display': 'none'});

		// Set variables
		let showAllTasks = "show-all-tasks"; // $_POST identifier

		// The number of the next page
		let nextPageNumber = $(this).attr("data-next-page-number");

		// The amount of records in 'tasks' table
		let amountOfRecords = $('.amount-of-records').attr("data-amount-of-records");

		// Turn string into number
		nextPageNumber = Number(nextPageNumber);
		amountOfRecords = Number(amountOfRecords);

		// Calculate the amount of pages
		let amountOfPages = Math.ceil(amountOfRecords / 4);

			$.post("/app/views/home/all-tasks.php", {

					nextPageNumber: nextPageNumber,
					amountOfRecords: amountOfRecords,
					showAllTasks: showAllTasks

			}, function(data) {

				// If the db table is empty
				if (data == false) {

						$('.content').html('<h4>You have no any tasks here</h4>');
						$('.content').fadeTo(middleTime, 1);

				// If there is at least one row in the table
				}	else {

						// Hide previous results
						$('.content').fadeTo(shortTime, 0);

						window.setTimeout(function() {

								$('.content').empty();
								$('.content').append(data);
								$('.content').css({'height': 'auto'});

								// Show new results
								$('.content').fadeTo(middleTime, 1);
								$('.pagination').fadeTo(middleTime, 1);

								// Set number of the next page in 'Next' button in '.pagination'
								if (nextPageNumber != amountOfPages) {
										$('.next').attr("data-next-page-number",  nextPageNumber + 1);
								} else {
									$('.next').attr("data-next-page-number",  nextPageNumber);
								}

								// Set number of the previous page in 'Previous' button in '.pagination'
								if (nextPageNumber != 1) {
										$('.previous').attr("data-next-page-number",  nextPageNumber - 1);
								} else {
									$('.previous').attr("data-next-page-number",  1);
								}

						}, middleTime);
				}

			});
});

// ------------------------------------------- 11. Show the form 'Add new task'

// Click button 'Add a new task'
$(".show-form").on('click', function() {

		// Hide '.pagination'
		$('.pagination').fadeTo(middleTime, 0, function() {

				$('.content').fadeTo(middleTime, 0);
				$('.content').empty();
				$('main').css({'height': 'auto'});

				// Show the input field to add new task
				$('.add-new-task').fadeTo(middleTime, 1);
		});

});

// --------------------------------------------------------- 12. Add a new task

// Click '.btn-add-new-task' button
$(".btn-add-new-task").on('click', function(event) {

		event.preventDefault();

		// Set variables (text of the task)
		let newTask = $("#new-task").val();

		// Load 'load img' while the script is loading
		$(".new-task-form-pop-up").load("/app/includes/wait-for-load-is-done.html");

		// Set timeout while the script is loaded
		setTimeout(function(){

				// Load the script
				$(".new-task-form-messages").load("/app/controllers/TasksController.php", {

						newTask: newTask

				});

		}, middleTime);
});

// --------------------------------------------------------- 13. Delete a tack
// Click 'Delete task' button
$(document).on("click", ".delete-task span", function(event){

		let taskId = $(this).attr("data-task-id");
		let deleteTask = 'deleteTask';

		$.post("/app/controllers/TasksController.php", {

				taskId: taskId,
				deleteTask: deleteTask

		}, function(data) {

			$('.show-delete-message').empty();
			$('.show-delete-message').html("<div class='modal'><div class='modal-dialog modal-confirm'><div class='modal-content'><div class='modal-header flex-column'><h4 class='modal-title w-100'>Oк!</h4></div><div class='modal-body'><p>Task was deleted</p></div><div class='modal-footer justify-content-center'><button type='button' class='btn btn-delete-ok' data-id-deleted-task='" + data + "'>Close</button></div></div></div></div>");
			$('.show-delete-message').fadeTo(300, 1);
		});
});

// --------------------------------------- 14. Click message 'Task was deleted'
	$(document).on("click", ".btn-delete-ok", function(){

		let taskId = $(this).attr("data-id-deleted-task");

		$('.hide-task-' + taskId).fadeTo(longTime, 0, function() {
				$('.hide-task-' + taskId + ' .card .card-body').empty().html("<h5 class='cart-title'>Task "
					+ taskId + " was deleted</h5>");
				$('.hide-task-' + taskId).fadeTo(middleTime, 1);
				$('.show-delete-message').fadeTo(longTime, 0).empty();
		});
	});

	$(document).on("click", ".page-link", function(){

		$(".page-link").each(function(){
				$(this).removeClass("active-page-like");
		});

		$(this).addClass("active-page-like");
	});

}); // end/$(document).ready(
