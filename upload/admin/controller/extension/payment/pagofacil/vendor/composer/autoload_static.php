<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde901528f4017e3d8ac8914fac5a9cca
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PagoFacilCore\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PagoFacilCore\\' => 
        array (
            0 => __DIR__ . '/..' . '/kdu/pagofacilcore/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde901528f4017e3d8ac8914fac5a9cca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde901528f4017e3d8ac8914fac5a9cca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}