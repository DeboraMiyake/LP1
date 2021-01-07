<?php
$server = 'localhost';
$user = 'root';
$password = '';
$banco = "bdprojeto";

$conn = mysqli_connect($server, $user, $password, $banco);
mysqli_set_charset($conn, 'utf8');
?>