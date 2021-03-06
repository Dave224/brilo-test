<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98a40f9035021e0ddc1d75a4929d2247
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '6a7f90f0429e6f9d7d19d27e532a414a' => __DIR__ . '/../..' . '/Init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Utils\\' => 6,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Services\\' => 9,
        ),
        'P' => 
        array (
            'Presenters\\' => 11,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'I' => 
        array (
            'Interfaces\\' => 11,
        ),
        'H' => 
        array (
            'Helpers\\' => 8,
        ),
        'E' => 
        array (
            'Extensions\\' => 11,
            'Enums\\' => 6,
        ),
        'C' => 
        array (
            'Configs\\' => 8,
            'Components\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Utils',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Services',
        ),
        'Presenters\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Presenters',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Interfaces',
        ),
        'Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Helpers',
        ),
        'Extensions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Extensions',
        ),
        'Enums\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Enums',
        ),
        'Configs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Configs',
        ),
        'Components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Components',
        ),
    );

    public static $classMap = array (
        'Components\\AdvantagesQuery\\AdvantagesQuery' => __DIR__ . '/../..' . '/Components/AdvantagesQuery/AdvantagesQuery.php',
        'Components\\AdvantagesQuery\\AdvantagesQueryFactory' => __DIR__ . '/../..' . '/Components/AdvantagesQuery/AdvantagesQueryFactory.php',
        'Components\\Advantages\\AdvantagesConfig' => __DIR__ . '/../..' . '/Components/Advantages/AdvantagesConfig.php',
        'Components\\Advantages\\AdvantagesFactory' => __DIR__ . '/../..' . '/Components/Advantages/AdvantagesFactory.php',
        'Components\\Advantages\\AdvantagesModel' => __DIR__ . '/../..' . '/Components/Advantages/AdvantagesModel.php',
        'Components\\ContactForm\\ContactFormConfig' => __DIR__ . '/../..' . '/Components/ContactForm/ContactFormConfig.php',
        'Components\\ContactForm\\ContactFormFactory' => __DIR__ . '/../..' . '/Components/ContactForm/ContactFormFactory.php',
        'Components\\ContactForm\\ContactFormPresenter' => __DIR__ . '/../..' . '/Components/ContactForm/ContactFormPresenter.php',
        'Components\\FaqQuery\\FaqQuery' => __DIR__ . '/../..' . '/Components/FaqQuery/FaqQuery.php',
        'Components\\FaqQuery\\FaqQueryFactory' => __DIR__ . '/../..' . '/Components/FaqQuery/FaqQueryFactory.php',
        'Components\\Faq\\FaqConfig' => __DIR__ . '/../..' . '/Components/Faq/FaqConfig.php',
        'Components\\Faq\\FaqFactory' => __DIR__ . '/../..' . '/Components/Faq/FaqFactory.php',
        'Components\\Faq\\FaqModel' => __DIR__ . '/../..' . '/Components/Faq/FaqModel.php',
        'Components\\LecturerQuery\\LecturerQuery' => __DIR__ . '/../..' . '/Components/LecturerQuery/LecturerQuery.php',
        'Components\\LecturerQuery\\LecturerQueryFactory' => __DIR__ . '/../..' . '/Components/LecturerQuery/LecturerQueryFactory.php',
        'Components\\Lecturer\\LecturerConfig' => __DIR__ . '/../..' . '/Components/Lecturer/LecturerConfig.php',
        'Components\\Lecturer\\LecturerFactory' => __DIR__ . '/../..' . '/Components/Lecturer/LecturerFactory.php',
        'Components\\Lecturer\\LecturerModel' => __DIR__ . '/../..' . '/Components/Lecturer/LecturerModel.php',
        'Components\\PageFront\\PageFrontConfig' => __DIR__ . '/../..' . '/Components/PageFront/PageFrontConfig.php',
        'Components\\PageFront\\PageFrontFactory' => __DIR__ . '/../..' . '/Components/PageFront/PageFrontFactory.php',
        'Components\\PageFront\\PageFrontModel' => __DIR__ . '/../..' . '/Components/PageFront/PageFrontModel.php',
        'Components\\PageTheme\\PageThemeConfig' => __DIR__ . '/../..' . '/Components/PageTheme/PageThemeConfig.php',
        'Components\\PageTheme\\PageThemeFactory' => __DIR__ . '/../..' . '/Components/PageTheme/PageThemeFactory.php',
        'Components\\PageTheme\\PageThemeModel' => __DIR__ . '/../..' . '/Components/PageTheme/PageThemeModel.php',
        'Components\\Page\\PageConfig' => __DIR__ . '/../..' . '/Components/Page/PageConfig.php',
        'Components\\Page\\PageFactory' => __DIR__ . '/../..' . '/Components/Page/PageFactory.php',
        'Components\\Page\\PageModel' => __DIR__ . '/../..' . '/Components/Page/PageModel.php',
        'Components\\Page\\PagePresenter' => __DIR__ . '/../..' . '/Components/Page/PagePresenter.php',
        'Components\\Post\\PostConfig' => __DIR__ . '/../..' . '/Components/Post/PostConfig.php',
        'Components\\Post\\PostFactory' => __DIR__ . '/../..' . '/Components/Post/PostFactory.php',
        'Components\\Post\\PostModel' => __DIR__ . '/../..' . '/Components/Post/PostModel.php',
        'Components\\Post\\PostPresenter' => __DIR__ . '/../..' . '/Components/Post/PostPresenter.php',
        'Components\\PostsQuery\\PostsQuery' => __DIR__ . '/../..' . '/Components/PostsQuery/PostsQuery.php',
        'Components\\PostsQuery\\PostsQueryFactory' => __DIR__ . '/../..' . '/Components/PostsQuery/PostsQueryFactory.php',
        'Components\\ProgramQuery\\ProgramQuery' => __DIR__ . '/../..' . '/Components/ProgramQuery/ProgramQuery.php',
        'Components\\ProgramQuery\\ProgramQueryFactory' => __DIR__ . '/../..' . '/Components/ProgramQuery/ProgramQueryFactory.php',
        'Components\\Program\\ProgramConfig' => __DIR__ . '/../..' . '/Components/Program/ProgramConfig.php',
        'Components\\Program\\ProgramFactory' => __DIR__ . '/../..' . '/Components/Program/ProgramFactory.php',
        'Components\\Program\\ProgramModel' => __DIR__ . '/../..' . '/Components/Program/ProgramModel.php',
        'Components\\SchemaGenerator\\SchemaGenerator' => __DIR__ . '/../..' . '/Components/SchemaGenerator/SchemaGenerator.php',
        'Enums\\ProgramEnum' => __DIR__ . '/../..' . '/Enums/ProgramEnum.php',
        'Symfony\\Component\\VarDumper\\Caster\\AmqpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/AmqpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ArgsStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ArgsStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\Caster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/Caster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ClassStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ClassStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ConstStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ConstStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutArrayStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\DOMCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DOMCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DateCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DateCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DoctrineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsPairStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\EnumStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/EnumStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ExceptionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\FrameStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/FrameStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\GmpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/GmpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\IntlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/IntlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\LinkStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/LinkStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/MemcachedCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PdoCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PdoCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PgSqlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ProxyManagerCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RedisCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RedisCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ReflectionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SplCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SplCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\StubCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/StubCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SymfonyCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\TraceStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/TraceStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlReaderCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/AbstractCloner.php',
        'Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/ClonerInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Cursor' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Cursor.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Data' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Data.php',
        'Symfony\\Component\\VarDumper\\Cloner\\DumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/DumperInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Stub' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Stub.php',
        'Symfony\\Component\\VarDumper\\Cloner\\VarCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/VarCloner.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/CliDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\DumpDescriptorInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand' => __DIR__ . '/..' . '/symfony/var-dumper/Command/ServerDumpCommand.php',
        'Symfony\\Component\\VarDumper\\Dumper\\AbstractDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/AbstractDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\CliDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/CliDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/DataDumperInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/HtmlDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ServerDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ServerDumper.php',
        'Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => __DIR__ . '/..' . '/symfony/var-dumper/Exception/ThrowingCasterException.php',
        'Symfony\\Component\\VarDumper\\Server\\Connection' => __DIR__ . '/..' . '/symfony/var-dumper/Server/Connection.php',
        'Symfony\\Component\\VarDumper\\Server\\DumpServer' => __DIR__ . '/..' . '/symfony/var-dumper/Server/DumpServer.php',
        'Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait' => __DIR__ . '/..' . '/symfony/var-dumper/Test/VarDumperTestTrait.php',
        'Symfony\\Component\\VarDumper\\VarDumper' => __DIR__ . '/..' . '/symfony/var-dumper/VarDumper.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php72\\Php72' => __DIR__ . '/..' . '/symfony/polyfill-php72/Php72.php',
        'Utils\\Util' => __DIR__ . '/../..' . '/Utils/Util.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98a40f9035021e0ddc1d75a4929d2247::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98a40f9035021e0ddc1d75a4929d2247::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98a40f9035021e0ddc1d75a4929d2247::$classMap;

        }, null, ClassLoader::class);
    }
}
