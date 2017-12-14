<?php
include 'vendor/autoload.php';

/**
 * Placeholder for the configuration root
 */
global $configRoot;

/**
 * Placeholder for the api configuration
 * @var array
 */
global $apiConfig;

// Should be set so the test should work
$apiConfig = array(
    "host" => $_ENV["ICINGA2HOST"],
    "port" => $_ENV["ICINGA2PORT"],
    "user" => $_ENV["ICINGA2USERNAME"],
    "password" => $_ENV["ICINGA2PASSWORD"],
    "cert" => $_ENV["ICINGA2CERTPATH"],
    "key" => $_ENV["ICINGA2KEYPATH"],
    "ca" => $_ENV["ICINGA2CAPATH"],
    "keyPassword" => $_ENV["ICINGA2KEYPASSWORD"]
);
$configRoot = __DIR__;