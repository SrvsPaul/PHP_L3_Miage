<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b314406ba517948a3c7b259c626f95f
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'U' => 
        array (
            'Util\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Configuration\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Util\\' => 
        array (
            0 => __DIR__ . '/../..' . '/util',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Controllers',
        ),
        'Configuration\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b314406ba517948a3c7b259c626f95f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b314406ba517948a3c7b259c626f95f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
