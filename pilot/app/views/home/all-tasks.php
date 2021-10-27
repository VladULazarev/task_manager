<?php session_start();

// Load classes for ajax
require_once 'autoloader-for-ajax.php';

// $_POST comes from /app.js ---- 9. If click 'Показать задачи'
if (isset($_POST['showAllTasks'])) {

    /** @param int $numberOfPage The number of the next page */
    $nextPageNumber = $_POST['nextPageNumber'];

    /** @param int $rowsPerPage */
    $rowsPerPage = 4;

    /** @param int $numberOfRows The amount of existing records */
    $numberOfRows = $_POST['amountOfRecords'];

    // Calculate the amount of pages
    $howManyPages = ceil($numberOfRows/$rowsPerPage);

    // Set number of row to start the query from DB table
    $beginFromRow = ($nextPageNumber * $rowsPerPage) - $rowsPerPage;

    // Get tasks
    $data = App\Controllers\TasksController::getAllTasks($beginFromRow, $rowsPerPage);

    while ($row = $data->fetch(PDO::FETCH_OBJ)) {

        echo "

            <div class='col-md-6'>
                <div class='card no-hover'>

                    <div class='card-body'>
                        <h5 class='card-title'>Задача " . htmlentities($row->id) . "</h5>
                        <p class='card-lang mb-1 mt-3'>" . htmlentities($row->description) . "</p>

                    </div>

                </div>
            </div>

        ";
    }
}
