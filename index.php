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
    </head>
    <body onload="clock()">
        <header id="header" dir="ltr">
            <h1>Chat App</h1>
            <div id="clock"></div>
        </header>
        <article>
            <div id="messages"></div>
            <div id="form">
                <form>
                    <input type="text" name="text" />
                    <input type="button" value="Send" name="send">
                </form>
            </div>
        </article>
    </body>
</html>