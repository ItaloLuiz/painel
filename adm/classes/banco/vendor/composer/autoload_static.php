<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6bb9ffbfe834558ed27dd2f3b4ccc5f4
{
    public static $prefixesPsr0 = array (
        'V' => 
        array (
            'Viocon' => 
            array (
                0 => __DIR__ . '/..' . '/usmanhalalit/viocon/src',
            ),
        ),
        'P' => 
        array (
            'Pixie' => 
            array (
                0 => __DIR__ . '/..' . '/usmanhalalit/pixie/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit6bb9ffbfe834558ed27dd2f3b4ccc5f4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
