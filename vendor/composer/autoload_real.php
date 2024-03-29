<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitca8bf8b3444b8ea4c73b664f18730577
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

        spl_autoload_register(array('ComposerAutoloaderInitca8bf8b3444b8ea4c73b664f18730577', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitca8bf8b3444b8ea4c73b664f18730577', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitca8bf8b3444b8ea4c73b664f18730577::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
