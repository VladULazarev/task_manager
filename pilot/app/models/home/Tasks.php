<?php

namespace App\Models\Home;

use Core\Model;

use Core\Validator;

class Tasks extends Model
{
      /**
       * Insert new task into the table
       * @param string $newTask The text of the new task
       */
      public function insertNewTask(

            $newTask

          )
      {
          $pre_insert = "INSERT INTO $this->tasksTb (

              description,
              created_at

          ) VALUES (?, NOW())";

          $insert = $this->connect()->prepare($pre_insert);
          $insert->execute([

            $newTask

          ]);
      }
}
