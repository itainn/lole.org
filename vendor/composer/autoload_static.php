<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26cf05d74410058c012403c0f42ae4a6
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit26cf05d74410058c012403c0f42ae4a6::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
