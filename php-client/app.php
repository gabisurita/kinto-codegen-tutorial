<?php
require_once('SwaggerClient-php/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setUsername('Gabi');
$config->setPassword('IReallyHatePHP');  // Please keep it a secret

// Create an API instance to make requests
$api_instance = new Swagger\Client\Api\KintoApi();

// Our Bucket data
$bucket = array(
    'data' => array(
        'id' => 'php_bucket',
        'my_precious' => True
    )
);

// Create a bucket
$api_instance->createBucket($bucket);

// Create a collection 'Good Moments' under the bucket
$api_instance->updateCollection('php_bucket', 'good_memories');

// Create some records
$record = array('data' => array('description' => 'Release of PHP 5.5'));
$api_instance->createRecord('php_bucket', 'good_memories', $record);

$record = array('data' => array('description' => 'Stop coding PHP'));
$api_instance->createRecord('php_bucket', 'good_memories', $record);

$record = array('data' => array('description' => 'My PC coded PHP for me'));
$api_instance->createRecord('php_bucket', 'good_memories', $record);

// Fetch all our records
$result = $api_instance->getRecords('php_bucket', 'good_memories');
print_r($result);

// Enough of PHP
$result = $api_instance->deleteBucket('php_bucket');
