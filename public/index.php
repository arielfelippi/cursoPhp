  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', false);

  require '../Application/config/Constantes.php';
  require '../Application/config/Autoload.php';

  use Application\core\App;

	$app = new App();

  // php -S localhost:8080 -t public/

  // https://medium.com/@jardelgoncalves/construindo-um-simples-framework-mvc-com-php-349e9cacbeb1

  // https://stackoverflow.com/questions/869092/how-to-enable-mod-rewrite-for-apache-2-2
