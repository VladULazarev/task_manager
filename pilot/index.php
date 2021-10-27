<?php session_start();

// For debugging
// echo '<br><p>SESSION array</p>';
// echo '<pre>','</br>',print_r($_SESSION),'</pre><br>';

  /** Autoloader */
  include('core/autoloader.php');

  /** Start Router */
  Core\Router::getRoute();

  // Canonical link for the current page
  $canonicalLink = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <link rel="canonical" href="<?= $canonicalLink ;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= $canonicalLink; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/app/resourses/css/app.css">

    <script src="/app/resourses/js/jquery-and-mobile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <meta name="author" content="Vlad, https://www.getyoursite.info">

    <!--[if lt IE 9]>
    <script src="https://static.stands4.com/app_common/js/libs/html5shiv.min.js"></script>
    <script src="https://static.stands4.com/app_common/js/libs/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

        <main>

          <?php
              // Start the Application
              Core\App::run();
          ?>

        </main>

    </div>


    <script async src="/app/resourses/js/app.js"></script>
  </body>
</html>
