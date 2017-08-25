<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc55d31df70ec8f3d31ea49c7b8b31e9c
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'njacek\\laravel-shoplo-api\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'njacek\\laravel-shoplo-api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc55d31df70ec8f3d31ea49c7b8b31e9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc55d31df70ec8f3d31ea49c7b8b31e9c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}