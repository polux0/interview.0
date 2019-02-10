<h1>Hello Alexus!</h1>
<h4>Attempting MySQL connection from php...</h4>

<?php

$host = 'mysql';
$user = 'otheruser';
$pass = 'password';
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else echo "Connected to MySQL successfully!";

?>