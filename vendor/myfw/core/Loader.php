<?php
class Loader
{
    public function loadClass($class) /**/
    {
        $arr = explode('\\', $class);
        $prefix = array_shift($arr);
        // var_dump($prefix);
        if($prefix == 'app'){
            $prefix_file = '../app/';
        } elseif ($prefix == 'myfw') {
            $prefix_file = '../vendor/myfw/';
        }
        $file = $prefix_file . implode('/', $arr) . '.php';
       // var_dump($file);

        if(is_file($file)){
            require_once $file;
        }
    }
}