<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/entities"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
// $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
// $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
// $conn = array(
//     'driver' => 'pdo_sqlite',
//     'path' => __DIR__ . '/db.sqlite',
// );

$connectionParams = [
    'driver'     => 'pdo_mysql',
    'host'       => 'localhost',
    'dbname'     => 'chat_app_db',
    'user'       => 'root',
    'password'   => '',
];
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);