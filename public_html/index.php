<h1>Hello Alexus!</h1>
<h4>Attempting MySQL connection from php...</h4>

<?php

if (!defined('PDO::ATTR_DRIVER_NAME')) {
echo 'PDO unavailable';
}
else{
	echo 'Everything is all right';
}
$user = 'root';
$password = 'rootpassword';

$dbh = new PDO('mysql:host=mysql;dbname=dbtest', $user, $password);

?>
