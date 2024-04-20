<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94e8f62ba9495cb121ecaa1423fe8eb8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Php\\Projetolol\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Php\\Projetolol\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit94e8f62ba9495cb121ecaa1423fe8eb8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94e8f62ba9495cb121ecaa1423fe8eb8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94e8f62ba9495cb121ecaa1423fe8eb8::$classMap;

        }, null, ClassLoader::class);
    }
}
