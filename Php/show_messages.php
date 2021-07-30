<?php

$conn = mysqli_connect('localhost', 'dvir', 'dvirfarkash09', 'chat');

$result = $conn->query("SELECT * FROM `messages` ORDER BY `ID` DESC LIMIT 10");

for ($i = 0; $i <= $result->num_rows; $i++) {
    $fetch = $result->fetch_row();
    echo '<div class="message"><button name="button_message"></button><h2 class="names">'.$fetch[3].'</h2><h3 class="time">'.$fetch[1].'</h3><p class="message">'.$fetch[2].'</p></div>';
}

?>