<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea09d1e0147e6db126970f05f5451e8b
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\Client\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\Client\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/User/Client',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea09d1e0147e6db126970f05f5451e8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea09d1e0147e6db126970f05f5451e8b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
