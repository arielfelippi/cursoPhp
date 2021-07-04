<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema ToDo List</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  </head>
  <body>

  <?php
	require '../Application/config/Autoload.php';

  error_reporting(E_ALL);
  ini_set('display_errors', false);

	use Application\core\App;
	use Application\core\controller\Controller;

	$app = new App();

  ?>
  <script src="/assets/js/jquery.slim.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>
