<?php session_start();?>
<div class="text-center mt-5 mb-5"><h3 class="welcom-user">Hi, <?= $_SESSION['user']; ?></h3></div>
<span class="log-out py-1 px-4">Log Out</span>

<?php
    // Set $_SESSION['amount-of-tasks'], we need it for 'pagination'
    $modelObj = new Core\Model;
    $countRecords = $modelObj->countRecords("tasks");
    App\Controllers\SessionsHandler::setSession('amount-of-tasks', $countRecords);
?>

<input type="hidden" class="amount-of-records" data-amount-of-records="<?= $_SESSION['amount-of-tasks']; ?>">

<div class="row to-do-list">

  <!-- Create task -->
  <div class='col-md-6'>
      <div class='card show-form'>
          <div class='card-body'>
              <h4 class='card-title text-center'>Create a new task</h4>
          </div>
      </div>
  </div>

  <!-- Show tasks -->
  <div class="col-md-6">
      <div class="card show-tasks" data-next-page-number='1'>
          <div class='card-body'>
              <h4 class='card-title text-center'>Show all tasks</h4>
          </div>
      </div>
  </div>

</div>

<!-- Add new task -->
<div class="row add-new-task mt-3">

    <div class="col-md-6">

        <form>

          <div class="form-row">
            <div class="col">
              <div class="form-group">
                <label for="new-task">Add a new task</label>
                <textarea rows="6" class="form-control" id="new-task" placeholder="Enter the content of a new task" autocomplete="off"></textarea>
              </div>
            </div>
          </div>

          <div class="btn-container mt-3">
              <button class="btn btn-add-new-task">Add New Task</button>
          </div>

          <div class="new-task-form-messages form-messages"></div>
          <div class="new-task-form-pop-up"></div>

        </form>

    </div>
  </div>

<div class="row content"></div>
<div class="show-delete-message"></div>

<?php
// Show 'pagination'
$howManyPages = ceil($_SESSION['amount-of-tasks'] / 4);

if ($howManyPages >= 2) {

  echo "
  <nav>
      <ul class='pagination'>
        <li class='page-item'><a class='page-link previous' data-next-page-number='1'>Previous</a></li>
  ";

  for ($i = 0, $index = 1; $i < $howManyPages; $i++) {
      if ($i == 0) {
        echo "<li class='page-item'><a class='page-link active-page-like' data-next-page-number='{$index}'>$index</a></li>";
        $index++;
        continue;
      }
      echo "<li class='page-item'><a class='page-link' data-next-page-number='{$index}'>$index</a></li>";
      $index++;
  }

  echo "
      <li class='page-item'><a class='page-link next' data-next-page-number='2'>Next</a></li>
    </ul>
  </nav>";
}

?>
