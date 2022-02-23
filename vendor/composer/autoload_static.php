<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37500d068783252559f5aa458c022da9
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Curl\\' => 5,
            'Cachesistemas\\Gov\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
        'Cachesistemas\\Gov\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit37500d068783252559f5aa458c022da9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37500d068783252559f5aa458c022da9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37500d068783252559f5aa458c022da9::$classMap;

        }, null, ClassLoader::class);
    }
}