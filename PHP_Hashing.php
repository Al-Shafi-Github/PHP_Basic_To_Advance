<?php
$password = 'rush123';

$hash = password_hash($password, PASSWORD_DEFAULT);

//Verify the password 
if (password_verify('rush123', $hash)) {
    echo 'Password is corerct';
} else
    echo 'Incorrect Password';
