<?php

echo 'Hello from Sriram R M<br/>';

$host = 'db';
$user = 'admin';
$password = 'Adminpass19';

$conn = mysqli_connect($host, $user, $password);

if (!$conn) {
	die('Cannot connect: ' . mysqli_connect_error());
}
echo 'MYSQL connected successfully';

?>
