<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86460239b6e22c731205e9af43420f32
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit86460239b6e22c731205e9af43420f32::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86460239b6e22c731205e9af43420f32::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86460239b6e22c731205e9af43420f32::$classMap;

        }, null, ClassLoader::class);
    }
}