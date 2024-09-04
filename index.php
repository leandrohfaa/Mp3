<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Mp3 em Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
            if (!isset($_GET['pages'])) {
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