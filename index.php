<?php

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="./connection.php" method="_GET" name="myform" onsubmit=" return validation()">
                <label for="username">username</label>
                <input type="text" name="username" id="username" placeholder=" Please Enter username">


                <label for="Password">Password</label>
                <input type="password" name="password" id="Password" placeholder="Please Enter Password">




                <input type="submit" value="Login" id="btn">

            </form>
        </div>
    </div>
    <script src="./index.js"></script>
</body>

</html>