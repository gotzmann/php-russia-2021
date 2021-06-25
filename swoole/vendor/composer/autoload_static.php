<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f7afb0393477a11dbe2ec096d5e1148
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f7afb0393477a11dbe2ec096d5e1148::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f7afb0393477a11dbe2ec096d5e1148::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f7afb0393477a11dbe2ec096d5e1148::$classMap;

        }, null, ClassLoader::class);
    }
}