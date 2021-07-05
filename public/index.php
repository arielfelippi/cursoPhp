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

  define("PROJECT_NAME", "../cursoPhp");
  define("SERVER_NAME", "localhost");
  define("USER_DB", "root");
  define("PASSWORD_DB", "");
  define("NAME_DB", "cursoPhp");
  define("PORT_DB", 3306);

  require '../Application/config/Autoload.php';

  use Application\core\App;

	$app = new App();

  // php -S localhost:8080 -t public/

  // https://medium.com/@jardelgoncalves/construindo-um-simples-framework-mvc-com-php-349e9cacbeb1

  ?>
  </body>
</html>
