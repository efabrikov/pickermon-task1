<?php
//test 1
try {
    $conn = $factory->getConnection('ssh', 'user', 'pass', 'hostname.com', 2222);
    $conn->cd('/var/www')
        ->download('dump.tar.gz')
        ->close();
} catch (Exception $e) {
    echo $e->getMessage();
}