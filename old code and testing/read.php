<?php

#phpmyadmin-ctl install

 $host = "127.0.0.1";
    $user = "evaod";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "sample_db";                                  //Your database name you want to connect to

    // Create connection
            $conn = new mysqli($host, $user, $pass, $db);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 



$sql = "SELECT customer_id, name, email FROM tblCustomers";
$result = $conn->query($sql);


 if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "ID: " . $row["customer_id"]. " - Name: " . $row["name"]. " " . " 
                    - email: " . $row["email"]. " " . "<br>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>