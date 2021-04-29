<?php
$servername = 'mysql';
$username = 'root';
$password = 'root';

$mysql = new MySQLi($servername, $username, $password, 'wordpress');
if ($mysql->connect_errno) {
echo "Errno: " . $mysql->connect_errno . "\n";
}
$result = $mysql -> query("show databases");
print_r($result);