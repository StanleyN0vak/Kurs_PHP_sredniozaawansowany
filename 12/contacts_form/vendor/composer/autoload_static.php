<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77488b8cc8ba369e3bbed70b23e5415e
{
    public static $files = array (
        'e69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        'def43f6c87e4f8dfd0c9e1b1bab14fe8' => __DIR__ . '/..' . '/symfony/polyfill-iconv/bootstrap.php',
        '662a729f963d39afe703c9d9b7ab4a8c' => __DIR__ . '/..' . '/symfony/polyfill-php83/bootstrap.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php83\\' => 23,
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Intl\\Normalizer\\' => 33,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
            'Symfony\\Polyfill\\Iconv\\' => 23,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Component\\Validator\\' => 28,
        ),
        'M' => 
        array (
            'Mateusz\\ContactsForm\\' => 21,
        ),
        'E' => 
        array (
            'Egulias\\EmailValidator\\' => 23,
        ),
        'D' => 
        array (
            'Doctrine\\Deprecations\\' => 22,
            'Doctrine\\Common\\Lexer\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php83\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php83',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Symfony\\Polyfill\\Iconv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-iconv',
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
        'Mateusz\\ContactsForm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Egulias\\EmailValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/egulias/email-validator/src',
        ),
        'Doctrine\\Deprecations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/deprecations/lib/Doctrine/Deprecations',
        ),
        'Doctrine\\Common\\Lexer\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/lexer/src',
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
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
        'Override' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/Override.php',
        'SQLite3Exception' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/SQLite3Exception.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77488b8cc8ba369e3bbed70b23e5415e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77488b8cc8ba369e3bbed70b23e5415e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77488b8cc8ba369e3bbed70b23e5415e::$classMap;

        }, null, ClassLoader::class);
    }
}
