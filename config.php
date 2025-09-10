<?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbpassword = '';
$dbname = 'perfumaria';

$conn = mysqli_connect($dbhost, $dbUsername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>

