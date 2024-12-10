<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b6fbb16024c07a28729efcdf1b64e92
{
    public static $files = array (
        '0f5c2e42cd57cee173a4e5751046ee6b' => __DIR__ . '/..' . '/openswoole/core/src/Coroutine/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
        ),
        'O' => 
        array (
            'OpenSwoole\\Core\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'OpenSwoole\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/openswoole/core/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b6fbb16024c07a28729efcdf1b64e92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b6fbb16024c07a28729efcdf1b64e92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b6fbb16024c07a28729efcdf1b64e92::$classMap;

        }, null, ClassLoader::class);
    }
}
