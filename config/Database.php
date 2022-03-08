<?php
    // $url = getenv('JAWSDB_URL');
    // $dbparts = parse_url($url);

    // $hostname = $dbparts['host'];
    // $username = $dbparts['user'];
    // $password = $dbparts['pass'];
    // //$password = getenv('PASSWORD');
    // $database = ltrim($dbparts['path'], '/');

    $hostname = 'eanl4i1omny740jw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    $username = 'h5bl2txltjkl6hzh';
    $password = 'w8a2y7ktf3nczo8d';
    $database = 'pw5d2fj3gsgx5v4g';

    try{
        $conn = new PDO("mysql:host={$hostname};dbname={$database}", $username, $password);
        //$this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);

        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        }
    catch(PDOException $e)
        {
            echo 'Connection failed: ' . $e->getMessage();
        }