<?php 

    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);

    $hostname = $dbparts['host'];
    $username = $dbparts['user'];
    $password = getenv('PASSWORD');
    $database = ltrim($dbparts['path'], '/');

    // $host = 'localhost';
    // $db_name = 'world';
    // $username = 'root';
    // //$password = '';

       try{
           $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
           //set the PDO error mode to exception
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           echo "Connected successfully";
           }
        catch(PDOException $e)
           {
               echo "Connection failed: " . $e->getMessage();
           }


    // try {
    //     $db = new PDO("mysql:host={$host};dbname={$db_name}", $username); //, $password
    //     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch (PDOException $e) {
    //     $error_message = 'Database Error: ';
    //     $error_message .= $e->getMessage();
    //     echo $error_message;
    //     exit('Unable to connect to the database');
    // }