#!/usr/bin/env php
<?php

/*
 * Interactive script to generate password hashes.
 *
 */

// This is the base directory of the SimpleSAMLphp installation
$baseDir = dirname(dirname(__FILE__));

// Add library autoloader
require_once($baseDir . '/lib/_autoload.php');


echo "Enter password: ";
$password = trim(fgets(STDIN));

if (empty($password)) {
    echo "Need at least one character for a password\n";
    exit(1);
}

$cryptoUtils = new SimpleSAML\Utils\Crypto();
echo "\n  " . $cryptoUtils->pwHash($password) . "\n\n";
