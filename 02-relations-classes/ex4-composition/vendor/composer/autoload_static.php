<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a8d156ba4618475c316b8cf33e9ad3f
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
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a8d156ba4618475c316b8cf33e9ad3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a8d156ba4618475c316b8cf33e9ad3f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a8d156ba4618475c316b8cf33e9ad3f::$classMap;

        }, null, ClassLoader::class);
    }
}