<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24160ddccc368c357467ec25aa2285fc
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Isaacrasolofo\\RpgPhp\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Isaacrasolofo\\RpgPhp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit24160ddccc368c357467ec25aa2285fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24160ddccc368c357467ec25aa2285fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit24160ddccc368c357467ec25aa2285fc::$classMap;

        }, null, ClassLoader::class);
    }
}
