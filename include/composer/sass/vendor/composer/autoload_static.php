<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit016278ceed34d6fcbc07be74683e0110
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'ScssPhp\\ScssPhp\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ScssPhp\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/scssphp/scssphp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit016278ceed34d6fcbc07be74683e0110::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit016278ceed34d6fcbc07be74683e0110::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit016278ceed34d6fcbc07be74683e0110::$classMap;

        }, null, ClassLoader::class);
    }
}
