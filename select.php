<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name FROM detail";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($post = $result->fetch_assoc()) {
        echo "id: " . $post["id"]. " - Name: " . $post["name"].  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>