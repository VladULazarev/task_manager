<?php

namespace App\Controllers;

require_once 'autoloader-for-ajax.php';

use Core\Controller;
use Core\Model;
use App\Models\Home\Tasks;

class TasksController extends Controller
{
		/**
		 * @var Object instance of PDO Statement
		 */
		private static $data;

		/**
     * Get all tasks
		 *
		 * @return Object $data instance of PDO Statement
		 * @param int $beginFromRow The number of row to start query
		 * @param int $rowsPerPage The amount of rows per page
     */
		public static function getAllTasks($beginFromRow, $rowsPerPage)
		{
				$modelObj = new Model();
				self::$data = $modelObj->index($beginFromRow, $rowsPerPage);

				return self::$data;
		}

		/**
     * Insert new task into the DB teble
     */
		public static function insertNewTaskIntoDb()
		{
			// Set variables from $_POST
			$newTask = trim($_POST['newTask']);

			// Set object
			$modelObj = new Tasks();

			// Insert the data into 'tasks' table
			$modelObj->insertNewTask($newTask);
		}
}

// If form 'add-new-task' was submited
if (isset($_POST['newTask'])) {

		TasksController::insertNewTaskIntoDb();



		ErrorController::showPopupMessageFromAddNewTaskForm('task-was-added');
}
