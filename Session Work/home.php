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
    <h2> Welcome to Home Page</h2>
    <a href="session.php">This goes to login page</a>
</body>

</html>

<?php
$_SESSION["username"];
$_SESSION["password"];
?>