<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Mp3 em Php</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
        <?php
            if (isset($_GET['Mp3/pages'])) {
                if (file_exists("Mp3/pages/{$_GET['pages']}.php")) {
                    include_once "Mp3/pages/{$_GET['pages']}.php";
                } else {
                    include_once 'Mp3/pages/error404.php';
                }
            } else {
                include_once 'Mp3/pages/albums.php';
            }
        ?>
    </div> 
  </body>
</html>
