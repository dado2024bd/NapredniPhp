<?php

spl_autoload_register(function(string $class)
{
    $prefix = 'App\\';  //dvostruki \\ jer inace je greska pa php treba znat to je znak backslash
    $baseDirectory = __DIR__ . '/app/';   //Php-ova konstanta __DIR__ bazni direktorij plus mapa klasa aplikacije /app

    $prefixLength = strlen($prefix);

    if (strncmp($prefix, $class, $prefixLength) !== 0)
    {
        return;
    }

    $classWithoutPrefix = substr($class, $prefixLength);
    $file = $baseDirectory . str_replace('\\', DIRECTORY_SEPARATOR, $classWithoutPrefix) . '.php';

    //   var_dump($file);
    //     die();
    if(file_exists($file))
    {
        include $file;
    }
});
