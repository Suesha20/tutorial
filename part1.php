<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scse";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE profile (
name VARCHAR(10) PRIMARY KEY ,
password varchar(50) ,
gender enum('male','female') ,
num varchar(13) ,
email varchar(50) ,
status tinyint(1) ,
dob date

)";

if (mysqli_query($conn, $sql)) {
    echo "Table profile created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>