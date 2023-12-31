<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitddd95a568ecd2b30cde8ff1856289a17
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Patterns\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Patterns\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitddd95a568ecd2b30cde8ff1856289a17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitddd95a568ecd2b30cde8ff1856289a17::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitddd95a568ecd2b30cde8ff1856289a17::$classMap;

        }, null, ClassLoader::class);
    }
}
