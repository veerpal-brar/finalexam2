<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	echo "Connected successfully";
} 

/*// Create database
$sql = "CREATE DATABASE MAD3134";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/


// use database
$sql = "USE MAD3134";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}



$sql = "CREATE TABLE users(
              userId int(11) NOT NULL AUTO_INCREMENT, 
             userName varchar(30) NOT NULL,
             userEmail varchar(60) NOT NULL,
            userPass varchar(255) NOT NULL,
			PRIMARY KEY (userId),
			UNIQUE KEY userEmail (userEmail))";
			
			if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>