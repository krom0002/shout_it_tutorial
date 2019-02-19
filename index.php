<?php include 'database.php'; ?>
<?php 
// Create Select Query
$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con, $query);
?>

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
                 <!--while loop to print out all shouts from database  -->
                <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
                <li class="shout">
                    <span><?php echo $row['time'] ?> - </span>
                    <strong><?php echo $row['user'] ?>: </strong> 
                    <em><?php echo $row['message'] ?> </em>
                </li>                
                <?php endwhile; ?>
            </ul>
        </div><!-- shouts -->

        <div id="input">

            <!-- send error for form validation -->
            <?php if (isset($_GET['error'])) : ?>
                <div class="error">
                    <?php echo $_GET['error']; ?>
                </div><!-- error -->
            <?php endif; ?>

            <!-- form input -->
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