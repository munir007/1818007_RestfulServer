<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8d9f264c02bb2b8bc6106aee1c0e722
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chriskacerguis\\RestServer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chriskacerguis\\RestServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8d9f264c02bb2b8bc6106aee1c0e722::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8d9f264c02bb2b8bc6106aee1c0e722::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8d9f264c02bb2b8bc6106aee1c0e722::$classMap;

        }, null, ClassLoader::class);
    }
}
