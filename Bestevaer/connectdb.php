<?php
    $host = 'localhost';
    $dbname = 'bestevaer';
    $username = 'root';
    $password = 'root';

    $connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
    $db = new PDO($connectStr, $username, $password);

?>