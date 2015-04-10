<?php
//autoload
require(__DIR__ . '/vendor/autoload.php');

use efabrikov\filetransfer\Factory;

error_reporting(E_ERROR);
ini_set("display_errors", 1);

//create object
$factory = new Factory();

require_once (__DIR__ . '/test1.php');
require_once (__DIR__ . '/test2.php');