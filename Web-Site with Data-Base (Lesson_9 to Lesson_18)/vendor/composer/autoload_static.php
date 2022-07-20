<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c7d0c9ac858b425e3f2ef373c58d220
{
    public static $classMap = array (
        'APP' => __DIR__ . '/../..' . '/core/Lesson_22_App.php',
        'ComposerAutoloaderInit7c7d0c9ac858b425e3f2ef373c58d220' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit7c7d0c9ac858b425e3f2ef373c58d220' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/DataBase/Lesson_13_Connect_DB.php',
        'Lesson_23_PagesController' => __DIR__ . '/../..' . '/controllers/Lesson_23_PagesController.php',
        'Lesson_23_TasksController' => __DIR__ . '/../..' . '/controllers/Lesson_23_TasksController.php',
        'QuerryBuilder' => __DIR__ . '/../..' . '/core/DataBase/Lesson_14_Querry.php',
        'Request' => __DIR__ . '/../..' . '/core/Lesson_16_Require.php',
        'Router' => __DIR__ . '/../..' . '/core/Lesson_16_routes.php',
        'Task' => __DIR__ . '/../..' . '/Lesson_12_classes.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7c7d0c9ac858b425e3f2ef373c58d220::$classMap;

        }, null, ClassLoader::class);
    }
}
