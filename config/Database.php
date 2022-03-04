<?php 

    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);

    $hostname = $dbparts['host'];
    $username = $dbparts['user'];
    $password = getenv('PASSWORD');
    $database = ltrim($dbparts['path'], '/');

    try{
        $this->conn = new PDO(
        'mysql:host=' . $this->host . 
        ';dbname=' . $this->db_name, 
        $this->username, 
        $this->password
    );
        //$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        //set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        }
    catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
