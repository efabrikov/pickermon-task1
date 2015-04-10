<?php
//test 2
try {
    $conn = $factory->getConnection('ftp', 'user', 'pass', 'hostname.com');
    echo $conn->pwd() . "\n";
    $conn->upload('archive.zip');
    print_r($conn->exec('ls -al'));
} catch (Exception $e) {
    echo $e->getMessage();
}