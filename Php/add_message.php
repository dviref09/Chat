<?php

session_start();

$conn = mysqli_connect('localhost', 'dvir', 'dvirfarkash09', 'chat');

$message = htmlspecialchars($_GET['message']);
$result = $conn->query('INSERT INTO `messages`(`text`, `writer`) VALUES ("'.$message.'","'.$_SESSION['name'].'")');

?>