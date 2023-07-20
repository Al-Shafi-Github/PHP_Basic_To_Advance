<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial
<title>Document</title>
</head>
<body>
<form action=" index.php" method="post">
    <label>username: </label>
    <input type="text" name="username"><br>
    <label>password: </label>
    <input type="password" name="password"><br>
    <input type="submit" name="1 '>
</form>
</body>
</html>
<?php
// isset() = Returns TRUE if a variable is declared and no
// empty() = Returns TRUE if a variable is not declared,

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (empty($username)) {
        echo "Username is missing";
    } elseif (empty($password)) {
        echo "Password is missing";
    } else {
        echo "Hello {$username}";
    }
}
?>