<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79cc7100d4b29683fe8616e0fbb95ad0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Senac\\SistemaDeMencoes\\Config\\' => 30,
            'Senac\\SistemaDeMencoes\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Senac\\SistemaDeMencoes\\Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Config',
        ),
        'Senac\\SistemaDeMencoes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit79cc7100d4b29683fe8616e0fbb95ad0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79cc7100d4b29683fe8616e0fbb95ad0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79cc7100d4b29683fe8616e0fbb95ad0::$classMap;

        }, null, ClassLoader::class);
    }
}
