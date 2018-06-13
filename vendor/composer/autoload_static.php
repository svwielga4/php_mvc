<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34b5a5de3bec3454d83824a793ba9fa8
{
    public static $classMap = array (
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'Post' => __DIR__ . '/../..' . '/arrayfuncs/index.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/query_builder.php',
        'Request' => __DIR__ . '/../..' . '/core/request.php',
        'Router' => __DIR__ . '/../..' . '/core/router.php',
        'Task' => __DIR__ . '/../..' . '/Task.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit34b5a5de3bec3454d83824a793ba9fa8::$classMap;

        }, null, ClassLoader::class);
    }
}