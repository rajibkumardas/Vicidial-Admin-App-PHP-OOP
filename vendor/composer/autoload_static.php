<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51d0cddc671a28e5ef0083eb89d1659a
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
        'A' => 
        array (
            'AshleyDawson\\SimplePagination\\' => 
            array (
                0 => __DIR__ . '/..' . '/ashleydawson/simple-pagination/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit51d0cddc671a28e5ef0083eb89d1659a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}