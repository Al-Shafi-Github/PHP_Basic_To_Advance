<?php
session_Start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> Welcome to Login Page</h2>
    <a href="home.php">This goes to home page</a>
</body>

</html>

<?Php
$_SESSION["username"] = 'Shafi';
$_SESSION["password"] = '123456';
?>