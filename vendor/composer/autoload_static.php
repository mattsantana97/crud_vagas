<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74069a4fe054e8920587b23139a4a2b2
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit74069a4fe054e8920587b23139a4a2b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74069a4fe054e8920587b23139a4a2b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74069a4fe054e8920587b23139a4a2b2::$classMap;

        }, null, ClassLoader::class);
    }
}
