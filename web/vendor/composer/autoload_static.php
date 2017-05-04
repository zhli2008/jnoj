<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafb23ff7552872b3ec845a355f0a214a
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-markdown',
            ),
        ),
        'B' => 
        array (
            'Buzz' => 
            array (
                0 => __DIR__ . '/..' . '/kriswallsmith/buzz/lib',
            ),
        ),
    );

    public static $classMap = array (
        'ezSQL_codeigniter' => __DIR__ . '/..' . '/jv2222/ezsql/codeigniter/Ezsql_codeigniter.php',
        'ezSQL_cubrid' => __DIR__ . '/..' . '/jv2222/ezsql/cubrid/ez_sql_cubrid.php',
        'ezSQL_mssql' => __DIR__ . '/..' . '/jv2222/ezsql/mssql/ez_sql_mssql.php',
        'ezSQL_mysql' => __DIR__ . '/..' . '/jv2222/ezsql/mysql/ez_sql_mysql.php',
        'ezSQL_mysqli' => __DIR__ . '/..' . '/jv2222/ezsql/mysqli/ez_sql_mysqli.php',
        'ezSQL_oracle8_9' => __DIR__ . '/..' . '/jv2222/ezsql/oracle8_9/ez_sql_oracle8_9.php',
        'ezSQL_pdo' => __DIR__ . '/..' . '/jv2222/ezsql/pdo/ez_sql_pdo.php',
        'ezSQL_postgresql' => __DIR__ . '/..' . '/jv2222/ezsql/postgresql/ez_sql_postgresql.php',
        'ezSQL_sqlite' => __DIR__ . '/..' . '/jv2222/ezsql/sqlite/ez_sql_sqlite.php',
        'ezSQL_sqlsrv' => __DIR__ . '/..' . '/jv2222/ezsql/sqlsrv/ez_sql_sqlsrv.php',
        'ezSQL_sybase' => __DIR__ . '/..' . '/jv2222/ezsql/sybase/ez_sql_sybase.php',
        'ezSQLcore' => __DIR__ . '/..' . '/jv2222/ezsql/shared/ez_sql_core.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitafb23ff7552872b3ec845a355f0a214a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitafb23ff7552872b3ec845a355f0a214a::$classMap;

        }, null, ClassLoader::class);
    }
}
