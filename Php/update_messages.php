<?php

session_start();
$conn = mysqli_connect('localhost', 'dvir', 'dvirfarkash09', 'chat');

$result = $conn->query('SELECT * FROM `messages` WHERE `ID` > '.$_SESSION['index'].' ORDER BY `ID` DESC');

if ($result->num_rows > 0){
        for ($i = 0; $i < $result->num_rows; $i++) {
        $fetch = $result->fetch_row();
        echo '<div class="message"><button name="button_message"></button><h2 class="names">'.$fetch[3].'</h2><h3 class="time">'.$fetch[1].'</h3><p class="message">'.$fetch[2].'</p></div>';
        if ($i == $result->num_rows - 1) {
            $_SESSION['index'] = $fetch[0];
        }
    }
} else {
    echo 'none';
}

?>