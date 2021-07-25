<?php

session_start();

$conn = mysqli_connect('localhost', 'dvir', 'dvirfarkash09', 'chat');

$result = $conn->query('INSERT INTO `messages`(`text`, `writer`) VALUES ("'.$_GET['message'].'", "'.$_SESSION['name'].'")');

?>