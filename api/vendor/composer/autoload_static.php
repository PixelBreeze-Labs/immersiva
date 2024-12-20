<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f4f240fe83df72376bc0a97b202290a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MiladRahimi\\Jwt\\Tests\\' => 22,
            'MiladRahimi\\Jwt\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MiladRahimi\\Jwt\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/miladrahimi/php-jwt/tests',
        ),
        'MiladRahimi\\Jwt\\' => 
        array (
            0 => __DIR__ . '/..' . '/miladrahimi/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f4f240fe83df72376bc0a97b202290a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f4f240fe83df72376bc0a97b202290a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f4f240fe83df72376bc0a97b202290a::$classMap;

        }, null, ClassLoader::class);
    }
}
