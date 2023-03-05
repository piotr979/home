<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbcfd10e37279334ee19c23cdb33aa092
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Peter\\Untitled\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Peter\\Untitled\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbcfd10e37279334ee19c23cdb33aa092::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbcfd10e37279334ee19c23cdb33aa092::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbcfd10e37279334ee19c23cdb33aa092::$classMap;

        }, null, ClassLoader::class);
    }
}