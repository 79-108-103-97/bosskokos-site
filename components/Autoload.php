<?php

spl_autoload_register(function ($classname)
{
    $array_path = array(
        '/models/',
        '/components/',
        '/root//models/',
        '/root/components/'
    );

    foreach ($array_path as $path) {
        $path = ROOT . $path . $classname . '.php';
        if (is_file($path)){
            include_once $path;
        }
    }
});
