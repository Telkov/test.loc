<?php

use app\Room;

require '../app/classes/Loader.php';
$loader = new Loader();

spl_autoload_register([$loader, 'loadClass']);


$myRoom = new Room();
echo $myRoom->form . '<br>';
$myRoom->echoInfo();
echo '<br>';
echo $myRoom->getWindows();
?>