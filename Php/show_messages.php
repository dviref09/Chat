<?php

session_start()
$conn = mysqli_connect('localhost', 'dvir', 'dvirfarkash09', 'chat');

$result = $conn->query('SELECT * FROM `messages` LIMIT 10')
for ($i = 0; $i < $result->num_rows; i++) {

}

?>