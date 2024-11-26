<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit05b634b8af1c743bc4fce0b0c9d894c6
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit05b634b8af1c743bc4fce0b0c9d894c6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit05b634b8af1c743bc4fce0b0c9d894c6', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit05b634b8af1c743bc4fce0b0c9d894c6::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
