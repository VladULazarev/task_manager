/*
CONTENT

	1. Show form to register a new user
	2. Show form to sign in a user
	3. Click the buttin 'Log Out'
	4. Hide 'alert message' and 'alert border'
	5. If click 'ok' message
	6. If click 'danger' message
	7. Add new user
	8. User sign in
	9. If click 'Показать задачи'
	10. Show the form 'Добавить Задачу'
	11. Add new task
*/

// --------------------------------------------------------- Document is ready
$(document).ready(function(){

// --------------------------------------- 1. Show form to register a new user
$(".log-in").on('click', function() {

		$ ('.signin-user').fadeOut();

		window.setTimeout(function() {
				$ ('.add-user').fadeIn();
		}, 300);
});

// -------------------------------------------- 2. Show form to sign in a user
$(".sign-in").on('click', function() {

		$ ('.add-user').fadeOut();

		window.setTimeout(function() {
				$ ('.signin-user').fadeIn();
		}, 300);
});

// ---------------------------------------------- 3. Click the buttin 'Log Out'
$(".log-out").on("click", function() {

		var sessionName = 'user';
		var unsetSession = 'unsetSession'; // $_POST identifier

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

			$(this).next().fadeTo(300, 0);
			$(this).removeClass("alert-border");

			$(".form-messages").empty();
	});

// -------------------------------------------------- 5. If click 'ok' message
$(document).on("click", ".btn-ok", function(){

		event.preventDefault();
		$(location).attr("href", "/");
});

// ---------------------------------------------- 6. If click 'danger' message
$(document).on("click", ".btn-danger", function(){

		  event.preventDefault();
			$(".form-messages").empty();
});

// ----------------------------------------------------------- 7. Add new user

// Click 'btn-add-use' button
$(".btn-add-user").on('click', function(event) {

		event.preventDefault();

		// Remove 'alert message' and 'alert border' if there are any
		$("span[class*=alert]").fadeTo(300, 0);
		$("input").removeClass("alert-border");

		// Set variables
		var userLogin = $("#user-login").val();
		var userName = $("#user-name").val();
		var userLastName = $("#user-last-name").val();
		var userEmail = $("#user-email").val();
		var userPw = $("#user-pw").val();
		var addUser = "add-user"; // The $_POST identifier

		// Load 'load img' while the script is loading
		$(".add-user-form-pop-up").load("/app/includes/wait-for-load-is-done.html");

		// Set timeout to show the 'load img' above
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

		}, 400);
});

// ----------------------------------------------------------- 8. User sign in
// Click btn-signin-use button
$(".btn-signin-user").on('click', function(event) {

		event.preventDefault();

		// Remove 'alert message' and 'alert border' if there are any
		$("span[class*=alert]").fadeTo(300, 0);
		$("input").removeClass("alert-border");

		// Set variables
		var userEmailSignin = $("#user-email-signin").val();
		var userPwSignin = $("#user-pw-signin").val();
		var signinUser = "signin-user"; // The $_POST identifier

		// Load 'load img' while the script is loading
		$(".user-signin-form-pop-up").load("/app/includes/wait-for-load-is-done.html");

		// Set timeout to show the 'load img' above
		setTimeout(function(){

				// Load the script
				$(".user-signin-form-messages").load("/app/controllers/SigninController.php", {

						userEmailSignin: userEmailSignin,
						userPwSignin: userPwSignin,
						signinUser: signinUser
				});

		}, 400);
});

// ---------------------------------------------- 9. If click 'Показать задачи'

$(document).on("click", ".show-tasks, .page-link", function(event){

		// Get the height of '.content'
		var tabContentHeight = $(".content").height();

		// To hold the height of .content
		$(".content").css({'height': tabContentHeight});

		// Hide previous results
		$('.content').empty();
		$('.add-new-task').css({'display': 'none'});

		// Set variables
		var showAllTasks = "show-all-tasks"; // $_POST identifier

		// The number of the next page
		var nextPageNumber = $(this).attr("data-next-page-number");

		// The amount of records in 'tasks' table
		var amountOfRecords = $('.amount-of-records').attr("data-amount-of-records");

		// Turn string into number
		nextPageNumber = Number(nextPageNumber);
		amountOfRecords = Number(amountOfRecords);

		// Calculate the amount of pages
		var amountOfPages = Math.ceil(amountOfRecords / 4);

			$.post("/app/views/home/all-tasks.php", {

					nextPageNumber: nextPageNumber,
					amountOfRecords: amountOfRecords,
					showAllTasks: showAllTasks

			}, function(data) {

				// If the db table is empty
				if (data == false) {

						$('.content').html('<h4>Ничего нет</h4>');
						$('.content').fadeTo(200, 1);

				// If there is at least one row in the table
				}	else {

						// Hide previous results
						$('.content').fadeTo(200, 0);

						window.setTimeout(function() {

								$('.content').empty();
								$('.content').append(data);
								$(".content").css({'height': 'auto'});

								// Show new results
								$('.content').fadeTo(200, 1);
								$('.pagination').fadeTo(500, 1);

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

						}, 200);
				}

			});
});

// ---------------------------------------- 10. Show the form 'Добавить Задачу'

$(".show-form").on('click', function() {

		// Hide ''.pagination'
		$('.pagination').fadeTo(200, 0);

		window.setTimeout(function() {

				$('.content').fadeTo(200, 0);
				$('.content').empty();
				$("main").css({'height': 'auto'});

				// Show the input field to add user
				$('.add-new-task').fadeTo(200, 1);

		}, 200);

});

// ---------------------------------------------------------- 11. Add new task

// Click '.btn-add-new-task' button
$(".btn-add-new-task").on('click', function(event) {

		event.preventDefault();

		// Set variables (text of the task)
		var newTask = $("#new-task").val();

		// Load 'load img' while the script is loading
		$(".new-task-form-pop-up").load("/app/includes/wait-for-load-is-done.html");

		// Set timeout to show the 'load img' above
		setTimeout(function(){

				// Load the script
				$(".new-task-form-messages").load("/app/controllers/TasksController.php", {

						newTask: newTask

				});

		}, 300);
});

}); // end/$(document).ready(
