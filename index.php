<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <div class="row"></div>
        <?php
            include_once 'helpers.php';

            if (isset($_GET['pages'])) {
                if (file_exists("pages/{$_GET['pages']}.php")) {
                    include_once "pages/{$_GET['pages']}.php";
                } else {
                    include_once 'pages/error404.php';
                }
            } else {
                include_once 'pages/albums.php';
            }
        ?>
    </div> 
  </body>
</html>
