<?php

namespace App\Models\Home;

use Core\Model;
use Core\Validator;

class Users extends Model
{
      /**
       * Insert new user into the table
       * @param string $userLogin
       * @param string $userName
       * @param string $userLastName
       * @param string $userEmail
       * @param string $userPw 
       */
      public function addNewUser(

            $userLogin,
            $userName,
            $userLastName,
            $userEmail,
            $userPw
          )
      {
          $pre_insert = "INSERT INTO $this->usersTb (

              login,
              name,
              last_name,
              email,
              password

          ) VALUES (?, ?, ?, ?, ?)";

          $insert = $this->connect()->prepare($pre_insert);
          $insert->execute([

            $userLogin,
            $userName,
            $userLastName,
            $userEmail,
            $userPw
          ]);
      }
}
