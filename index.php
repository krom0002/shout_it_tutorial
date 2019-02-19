<?php include 'database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shout It!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
    <div id="container">
        <header>
            <h1>Shout It! Shout Box</h1>
        </header>

        <div id="shouts">
            <ul>
                <li class="shout"><span>10:15 pm - </span>Brad: Sup Homie? </li>
                <li class="shout"><span>10:15 pm - </span>Brad: Sup Homie? </li>
                <li class="shout"><span>10:15 pm - </span>Brad: Sup Homie? </li>
                <li class="shout"><span>10:15 pm - </span>Brad: Sup Homie? </li>
                <li class="shout"><span>10:15 pm - </span>Brad: Sup Homie? </li>
                <li class="shout"><span>10:15 pm - </span>Brad: Sup Homie? </li>
            </ul>
        </div><!-- shouts -->
        <div id="input">
            <form method="post" action="process.php">
                <input type="text" name="user" placeholder="Enter your name" />
                <input type="text" name="message" placeholder="Enter your message" />
                <br />
                <input class="shout-btn" type="submit" name="submit" value=" Shout it Out" />
            </form>

        </div><!-- input -->
    </div><!--container-->
</body>
</html>