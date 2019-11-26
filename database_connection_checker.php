<?php
$servername 	= "localhost";
$usr 			= "user";
$pass 			= "password";
$db 			= "database";


// Try to establish a connection
$conn = new mysqli($servername, $usr, $pass, $db);

// Check the connection status
if ($conn->connect_error) 
{
   # Kill the script and display the error message
   die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>