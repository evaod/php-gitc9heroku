<?php

//Learned how to write to databese here: 
//https://www.w3schools.com/php/php_mysql_insert.asp

     $host = "127.0.0.1";
     $user = "evaod";                   //Your Cloud 9 username
     $pass = "";                        //Remember, there is NO password by default!
     $db = "sample_db";                 //Your database name you want to connect to
  


//Retrievig values posted
//$customer_id = $_POST["30"];
//$name = $_POST["Laura"];
//$email = $_POST["Laura@gmail.com"];

     
     
    // Create connection
            $conn = new mysqli($host, $user, $pass, $db);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
//SQL Query using the fetched values
//$sql = "INSERT INTO tblCustomers(customer_id, name, email)
//VALUES ('$customer_id', '$name', '$email')";

$sql = "INSERT INTO tblCustomers(name, email)
VALUES ('Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>