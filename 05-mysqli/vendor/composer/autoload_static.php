<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite92721bbd633b84058f8282b4709849c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite92721bbd633b84058f8282b4709849c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite92721bbd633b84058f8282b4709849c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite92721bbd633b84058f8282b4709849c::$classMap;

        }, null, ClassLoader::class);
    }
}
