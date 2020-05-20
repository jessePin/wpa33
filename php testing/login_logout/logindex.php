<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();
        $auth = isset($_SESSION['auth']);
    ?>
<div id="wrap">
    <?php if($auth){?>
        <h1>Welcome to MY WEBSITE</h1>
        <p>You see this because your authenticate users</p>
        <b><?php echo $_SESSION['id']?></b>
        <a href="logout.php">logout</a>
    <?php } else{?>
        <h1>you need to login</h1>
    <form action="login.php" method="POST">
        <label for="id">id</label>&nbsp;
        <input type="text" name="id" id="id"><br><br>
        <label for="password">password</label>&nbsp;
        <input type="password" name="password" id="password">

        <input type="submit" value="login">
    </form>
    <?php }?>
</div>
</body>
</html>