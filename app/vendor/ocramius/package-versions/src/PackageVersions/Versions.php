<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => '1.10.2@b9d758e831c70751155c698c2f7df4665314a1cb',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.0.8@b0e0deb6e700438401ede433a15a6372d2285202',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.2@dafe298ce5d0b995ebe1746670704c0a35868a6a',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'guzzle/guzzle' => 'v3.8.1@4de0618a01b34aa1c8c33a3f13f396dcd3882eba',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.0.3@bfbbdb6c998d50dbf69d2187cb78a5f1fa36e1e9',
  'mikemccabe/json-patch-php' => '0.1.0@b3af30a6aec7f6467c773cd49b2d974a70f7c0d4',
  'monolog/monolog' => '1.25.3@fa82921994db851a8becaf3787a9e73c5976b6f1',
  'ocramius/package-versions' => '1.8.0@421679846270a5772534828013a93be709fb13df',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'rackspace/php-opencloud' => 'dev-master@062bf8bb3432c6e0f68e21a2f6dd5f02f2fc19d7',
  'sensio/framework-extra-bundle' => 'v5.5.5@c76bb1c5c67840ecb6d9be8e9d8d7036e375e317',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v4.4.8@fc8eff5841b549fbd66f89e1fd7cfb6a823ee512',
  'symfony/cache' => 'v4.4.8@ba0aa1738d04df338c0fabdbecf9cf5fddcdb63f',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v4.4.8@8ba41fe053683e1e6e3f6fa21f07ea5c4dd9e4c0',
  'symfony/console' => 'v4.4.8@10bb3ee3c97308869d53b3e3d03f6ac23ff985f7',
  'symfony/debug' => 'v4.4.8@346636d2cae417992ecfd761979b2ab98b339a45',
  'symfony/dependency-injection' => 'v4.4.8@9d0c2807962f7f12264ab459f48fb541dbd386bd',
  'symfony/doctrine-bridge' => 'v4.4.8@642cb1000331b8dc5568587f60aeb299070f9a55',
  'symfony/dotenv' => 'v4.4.8@a78e698cfb8aca8ef6814639eb5ffc17180a4326',
  'symfony/error-handler' => 'v4.4.8@7e9828fc98aa1cf27b422fe478a84f5b0abb7358',
  'symfony/event-dispatcher' => 'v4.4.8@abc8e3618bfdb55e44c8c6a00abd333f831bbfed',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/expression-language' => 'v4.4.8@38010d8d1eb425b74f25b87c366c4d97e4b06a89',
  'symfony/filesystem' => 'v4.4.8@a3ebf3bfd8a98a147c010a568add5a8aa4edea0f',
  'symfony/finder' => 'v4.4.8@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/flex' => 'v1.6.2@e4f5a2653ca503782a31486198bd1dd1c9a47f83',
  'symfony/form' => 'v4.4.8@505299904397a7c6d515a7c03cdbc1b4a1d4a21f',
  'symfony/framework-bundle' => 'v4.4.8@fdacdf191a71aef94e05b64319868f4d06fe509c',
  'symfony/http-client' => 'v4.4.8@88d1745f4095727b8bf0574a0f414331f4ec229c',
  'symfony/http-client-contracts' => 'v2.0.1@378868b61b85c5cac6822d4f84e26999c9f2e881',
  'symfony/http-foundation' => 'v4.4.8@ec5bd254c223786f5fa2bb49a1e705c1b8e7cee2',
  'symfony/http-kernel' => 'v4.4.8@1799a6c01f0db5851f399151abdb5d6393fec277',
  'symfony/inflector' => 'v4.4.8@53cfa47fe9142f39b5605df67bada3893dd4f46c',
  'symfony/intl' => 'v4.4.8@040f10fde20ae35e8623771ba8a733508c87aa6a',
  'symfony/mailer' => 'v4.4.8@939553797698f6702fb00bdc2870bfa23f976473',
  'symfony/mime' => 'v4.4.8@7a583ffb6c7dd5aabb5db920817a3cc39261c517',
  'symfony/monolog-bridge' => 'v4.4.8@224355f29abfb8b00a4c5fb22bdaff5c47e82105',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.8@ade3d89dd3b875b83c8cff2980c9bb0daf6ef297',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-icu' => 'v1.15.0@9c281272735eb66476e0fa7381e03fb0d4b60197',
  'symfony/polyfill-intl-idn' => 'v1.15.0@47bd6aa45beb1cd7c6a16b7d1810133b728bdfcf',
  'symfony/polyfill-mbstring' => 'v1.15.0@81ffd3a9c6d707be22e3012b827de1c9775fc5ac',
  'symfony/polyfill-php72' => 'v1.15.0@37b0976c78b94856543260ce09b460a7bc852747',
  'symfony/polyfill-php73' => 'v1.15.0@0f27e9f464ea3da33cbe7ca3bdf4eb66def9d0f7',
  'symfony/process' => 'v4.4.8@4b6a9a4013baa65d409153cbb5a895bf093dc7f4',
  'symfony/property-access' => 'v4.4.8@f6a51bd76a3a5c36c57221a4f491b9cf02663672',
  'symfony/property-info' => 'v4.4.8@ab5bb41dee66b4f7b4e0f615772b07d8f466e218',
  'symfony/routing' => 'v4.4.8@67b4e1f99c050cbc310b8f3d0dbdc4b0212c052c',
  'symfony/security-bundle' => 'v4.4.8@dd1641ab03f2dd62e7aa0de8efd80cee20d585ff',
  'symfony/security-core' => 'v4.4.8@fc84e9481e5bd9d80f70c0d8151601211377a5dc',
  'symfony/security-csrf' => 'v4.4.8@286a71ff176e1b0dd071f0e73dcec0970a56634b',
  'symfony/security-guard' => 'v4.4.8@d2ba618ed2a52f37dd74fb2c52a14388beddd5fc',
  'symfony/security-http' => 'v4.4.8@055a4f4fe58ab19515fa573919bf7ebd114f4aa7',
  'symfony/serializer' => 'v4.4.8@067b6a064ffc53b48d3854c7b408b1ea26017a50',
  'symfony/serializer-pack' => 'v1.0.3@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v4.4.8@e0324d3560e4128270e3f08617480d9233d81cfc',
  'symfony/translation' => 'v4.4.8@8272bbd2b7e220ef812eba2a2b30068a5c64b191',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v4.4.8@d64035d0d6b3dbeed3a6839e3833779aaecf3513',
  'symfony/twig-bundle' => 'v4.4.8@79046e5189c5f4da923f395ccc11db930953c990',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v4.4.8@1780dff34d756f924ed7bb4f1cd94a7f9685eb69',
  'symfony/var-dumper' => 'v4.4.8@c587e04ce5d1aa62d534a038f574d9a709e814cf',
  'symfony/var-exporter' => 'v4.4.8@6e95bdca4a4604da6c148729972d4b627a034b13',
  'symfony/web-link' => 'v4.4.8@9ec692b342855335f3f4e77753ad71f85c6038f8',
  'symfony/yaml' => 'v4.4.8@b385dce1c0e9f839b384af90188638819433e252',
  'twig/extra-bundle' => 'v3.0.3@6eaf1637abe6b68518e7e0949ebb84e55770d5c6',
  'twig/twig' => 'v3.0.3@3b88ccd180a6b61ebb517aea3b1a8906762a1dc2',
  'webimpress/safe-writer' => '2.0.1@d6e879960febb307c112538997316371f1e95b12',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'composer/xdebug-handler' => '1.4.1@1ab9842d69e64fb3a01be6b656501032d1b78cb7',
  'escapestudios/symfony2-coding-standard' => '3.11.0@78e3b0b6832c88cf7c0240b4abcd61430030d8c3',
  'friendsofphp/php-cs-fixer' => 'v2.16.3@83baf823a33a1cbd5416c8626935cf3f843c10b0',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'pdepend/pdepend' => '2.7.1@daba1cf0a6edaf172fa02a17807ae29f4c1c7471',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'phpmd/phpmd' => '2.8.2@714629ed782537f638fe23c4346637659b779a77',
  'squizlabs/php_codesniffer' => '3.5.5@73e2e7f57d958e7228fce50dc0c61f58f017f9f6',
  'symfony/browser-kit' => 'v4.4.8@e4b0dc1b100bf75b5717c5b451397f230a618a42',
  'symfony/css-selector' => 'v4.4.8@afc26133a6fbdd4f8842e38893e0ee4685c7c94b',
  'symfony/debug-bundle' => 'v4.4.8@dc847e4971b9f76b30e02d421b303d349d5aeed2',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'v4.4.8@4d0fb3374324071ecdd94898367a3fa4b5563162',
  'symfony/maker-bundle' => 'v1.16.0@c8b36ce2aac3635603b4ffc58fbc26717e0a7317',
  'symfony/phpunit-bridge' => 'v5.0.8@00b8da18a52fa842b7a39613fb0a63720a354e74',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v4.4.8@aaeaa6a620e0187ea3107bdd4030a8b284f7e89d',
  'symfony/web-server-bundle' => 'v4.4.8@a7fc347f104cf763c7bae568902223e5f918af9e',
  'paragonie/random_compat' => '2.*@61cb0be43a6a4db47b2e1b077d701db0a36e9bba',
  'symfony/polyfill-ctype' => '*@61cb0be43a6a4db47b2e1b077d701db0a36e9bba',
  'symfony/polyfill-iconv' => '*@61cb0be43a6a4db47b2e1b077d701db0a36e9bba',
  'symfony/polyfill-php71' => '*@61cb0be43a6a4db47b2e1b077d701db0a36e9bba',
  'symfony/polyfill-php70' => '*@61cb0be43a6a4db47b2e1b077d701db0a36e9bba',
  'symfony/polyfill-php56' => '*@61cb0be43a6a4db47b2e1b077d701db0a36e9bba',
  '__root__' => 'dev-master@61cb0be43a6a4db47b2e1b077d701db0a36e9bba',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
