<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit38d8a1d8b4c21c2922a8d115b41845fb
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

        spl_autoload_register(array('ComposerAutoloaderInit38d8a1d8b4c21c2922a8d115b41845fb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit38d8a1d8b4c21c2922a8d115b41845fb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit38d8a1d8b4c21c2922a8d115b41845fb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}