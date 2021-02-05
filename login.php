<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style3.css">
    <title>Login</title>
</head>

<body>
    <h2 class="write"></h2>

    <h1>Welcome to <strong>OUR CHAT</strong></h1>
    <hr>
    <div class="form_container">
        <form action="loginHandle.php" method="POST">
            Username:<br>
            <input type="text" name="username" placeholder="Username" id="username"><br>
            Password:<br>
            <input type="text" name="password" placeholder="Password" id="password"><br>
            <input type="submit" name="submit" value="Login" id="submit"><br>

        </form>
        <span style="color:brown;font-size:12px;margin-top:20px;">Don't have an account? <a href="index.php">Signup</a> here</span>
    </div>

    <?php
    if (isset($_GET['loginsuccess']) == 'false') {
        echo '<div style="text-align:center;color:red;font-weight:bold;font-size:20px;">Login Failed! Incorrect username or password</div>';
    }

    ?>
</body>

</html>