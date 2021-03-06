<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a90046eefe7bb7bc846ca7408128a68
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Minimarket\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Minimarket\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a90046eefe7bb7bc846ca7408128a68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a90046eefe7bb7bc846ca7408128a68::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
