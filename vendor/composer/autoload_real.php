<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit67f4d0481f5c02ff0edaaebaa31c9cdf
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit67f4d0481f5c02ff0edaaebaa31c9cdf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit67f4d0481f5c02ff0edaaebaa31c9cdf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit67f4d0481f5c02ff0edaaebaa31c9cdf::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit67f4d0481f5c02ff0edaaebaa31c9cdf::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire67f4d0481f5c02ff0edaaebaa31c9cdf($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire67f4d0481f5c02ff0edaaebaa31c9cdf($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}