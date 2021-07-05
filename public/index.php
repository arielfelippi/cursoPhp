<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema ToDo List</title>
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
  </head>
  <body>

  <?php
	require '../Application/config/Autoload.php';

  error_reporting(E_ALL);
  ini_set('display_errors', false);

  use Application\core\App;

	$app = new App();

  ?>
  <script src="../public/assets/js/jquery.slim.min.js"></script>
  <script src="../public/assets/js/bootstrap.min.js"></script>
  </body>
</html>
