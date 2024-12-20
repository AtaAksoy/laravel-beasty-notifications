<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05b634b8af1c743bc4fce0b0c9d894c6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ataaaksoy\\LaravelBeastyNotifications\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ataaaksoy\\LaravelBeastyNotifications\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05b634b8af1c743bc4fce0b0c9d894c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05b634b8af1c743bc4fce0b0c9d894c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05b634b8af1c743bc4fce0b0c9d894c6::$classMap;

        }, null, ClassLoader::class);
    }
}
