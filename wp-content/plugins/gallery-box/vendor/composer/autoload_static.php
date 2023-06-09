<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ac13aa761ff698b47bb8b1f9be76af7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ac13aa761ff698b47bb8b1f9be76af7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ac13aa761ff698b47bb8b1f9be76af7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ac13aa761ff698b47bb8b1f9be76af7::$classMap;

        }, null, ClassLoader::class);
    }
}
