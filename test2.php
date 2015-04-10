<?php
//test 2
try {
    $conn = $factory->getConnection(
        'ftp',
        'u102406250.efabrikov',
        'fgfdg$dfhgfGHSE',
        'ftp.efabrikov-10-04-2015.3eeweb.com'
        );

    echo $conn->pwd() . "\n<br>";
    $conn->upload('file.txt');
    print_r($conn->exec('ls -al'));
} catch (Exception $e) {
    echo $e->getMessage();
}