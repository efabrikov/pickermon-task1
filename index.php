<?php
//autoload
require(__DIR__ . '/vendor/autoload.php');

use efabrikov\filetransfer\Factory;
use efabrikov\filetransfer\FTP;
use efabrikov\filetransfer\SSH;

//create object
$factory = new Factory();

require_once (__DIR__ . '/test1.php');
require_once (__DIR__ . '/test2.php');