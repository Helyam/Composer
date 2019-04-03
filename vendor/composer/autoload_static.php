<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffea4786bcc8f027235cb88f897ad53c
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

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitffea4786bcc8f027235cb88f897ad53c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffea4786bcc8f027235cb88f897ad53c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitffea4786bcc8f027235cb88f897ad53c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
