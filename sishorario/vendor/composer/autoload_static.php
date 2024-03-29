<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3118a11a6474c2b9f983a3565396b49b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Mini\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Mini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3118a11a6474c2b9f983a3565396b49b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3118a11a6474c2b9f983a3565396b49b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
