<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef5b5070f17922194b00a7b7fd0f2b9b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef5b5070f17922194b00a7b7fd0f2b9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef5b5070f17922194b00a7b7fd0f2b9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef5b5070f17922194b00a7b7fd0f2b9b::$classMap;

        }, null, ClassLoader::class);
    }
}
