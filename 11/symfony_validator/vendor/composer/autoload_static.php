<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fb431d84182dbd8298812ce4ec0e949
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '662a729f963d39afe703c9d9b7ab4a8c' => __DIR__ . '/..' . '/symfony/polyfill-php83/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php83\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Component\\Validator\\' => 28,
        ),
        'M' => 
        array (
            'Mateusz\\SymfonyValidator\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php83\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php83',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Component\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/validator',
        ),
        'Mateusz\\SymfonyValidator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DateError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateError.php',
        'DateException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateException.php',
        'DateInvalidOperationException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateInvalidOperationException.php',
        'DateInvalidTimeZoneException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateInvalidTimeZoneException.php',
        'DateMalformedIntervalStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedIntervalStringException.php',
        'DateMalformedPeriodStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedPeriodStringException.php',
        'DateMalformedStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedStringException.php',
        'DateObjectError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateObjectError.php',
        'DateRangeError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateRangeError.php',
        'Override' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/Override.php',
        'SQLite3Exception' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/SQLite3Exception.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fb431d84182dbd8298812ce4ec0e949::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fb431d84182dbd8298812ce4ec0e949::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8fb431d84182dbd8298812ce4ec0e949::$classMap;

        }, null, ClassLoader::class);
    }
}
