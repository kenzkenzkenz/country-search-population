<?php
    // $url = getenv('JAWSDB_URL');
    // $dbparts = parse_url($url);

    // $hostname = $dbparts['host'];
    // $username = $dbparts['user'];
    // $password = $dbparts['pass'];
    // //$password = getenv('PASSWORD');
    // $database = ltrim($dbparts['path'], '/');

    $host = 'eanl4i1omny740jw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    $db_name = 'pw5d2fj3gsgx5v4g';
    $username = 'h5bl2txltjkl6hzh';
    $password = 'w8a2y7ktf3nczo8d';

    try {
        $db = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        $error_message = 'Database Error: ';
        $error_message .= $e->getMessage();
        echo $error_message;
        exit('Unable to connect to the database');
    }