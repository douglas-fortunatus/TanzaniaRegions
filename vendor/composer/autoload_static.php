<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ae86a62787ac4dccd2dc865ba61a613
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SalimMbise\\TanzaniaRegions\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SalimMbise\\TanzaniaRegions\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ae86a62787ac4dccd2dc865ba61a613::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ae86a62787ac4dccd2dc865ba61a613::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ae86a62787ac4dccd2dc865ba61a613::$classMap;

        }, null, ClassLoader::class);
    }
}