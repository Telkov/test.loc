<?php
class Loader
{
    public function loadClass($class) /*app\Room*/
    {
        $arr = explode('\\', $class);
        $prefix = array_shift($arr);

        if($prefix == 'app'){
            $prefix_file = '../app/classes/';
        } elseif ($prefix == 'vendor') {
            $prefix_file = '../vendor/module/';
        }
        $file = $prefix_file . array_shift($arr) . '.php';
//        var_dump($file);

        if(is_file($file)){
            require_once $file;
        }
    }
}