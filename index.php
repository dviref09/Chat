<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat App</title>
        <!--Style Links-->
        <link rel="stylesheet" href="Css\style.css?v=<?php echo time()?>" />
        <link rel="stylesheet" href="Css\reset.css?v=<?php echo time()?>" />
        <link rel="stylesheet" href="Css\header.css?v=<?php echo time()?>" />
        <link rel="stylesheet" href="Css\article.css?v=<?php echo time()?>" />
        <script src="Js\clock.js?v=<?php echo time()?>"></script>
        <script src="Js\send.js?v=<?php echo time()?>"></script>
        <script src="Js\update.js?v=<?php echo time()?>"></script>
    </head>
    <body onload="init(); clock()">
        <header id="header" dir="ltr">
            <h1><a href="/">Chat App</a></h1>
            <div id="clock"></div>
        </header>
        <article>
            <div id="messages">
                <?php
                
                require_once 'Php/show_messages.php';
                
                ?>
            </div>
            <?php

            if (isset($_POST['submit'])){
                $_SESSION['name'] = $_POST['name'];
            }

            if (isset($_SESSION['name'])) {
                echo '
                <div id="form">
                    <textarea name="text"></textarea>
                    <button name="send" onclick="send_message()">Send</button>
                </div>';
            }
            else {
                echo '
                <form action="index.php" method="POST">
                    <input type="text" name="name" />
                    <br />
                    <input type="submit" name="submit" />
                </form>';
            }

            ?>
        </article>
    </body>
</html>