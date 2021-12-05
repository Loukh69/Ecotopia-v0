<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0aaac06ee72ba087fd75eb9aa4ea5db3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0aaac06ee72ba087fd75eb9aa4ea5db3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0aaac06ee72ba087fd75eb9aa4ea5db3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0aaac06ee72ba087fd75eb9aa4ea5db3::$classMap;

        }, null, ClassLoader::class);
    }
}
