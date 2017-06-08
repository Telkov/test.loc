<?php

use app\Room;

require '../vendor/myfw/core/Loader.php';
$loader = new Loader();

spl_autoload_register([$loader, 'loadClass']);

$router = new \myfw\core\Router();
$router->start();



?>