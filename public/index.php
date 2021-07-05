<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema ToDo List</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  </head>
  <body>

  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', false);

  require '../Application/config/Constantes.php';
  require '../Application/config/Autoload.php';

  use Application\core\App;

	$app = new App();

  // php -S localhost:8080 -t public/

  // https://medium.com/@jardelgoncalves/construindo-um-simples-framework-mvc-com-php-349e9cacbeb1

  ?>
  </body>
</html>
<script src="/assets/js/moment.js"></script>
<script src="/assets/js/functions.js"></script>
