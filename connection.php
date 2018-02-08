<?php
        //session_start();
       
    $host = "127.0.0.1";
    $user = "evaod";                    //Your Cloud 9 username
    $pass = "";                         //Remember, there is NO password by default!
    $db = "sample_db";                  //Your database name you want to connect to
    
    // Create connection
            $conn = new mysqli($host, $user, $pass, $db);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

           #$conn->close();
        ?>