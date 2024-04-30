<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$users = file('users.txt', FILE_IGNORE_NEW_LINES);

foreach ($users as $user) {
    list($storedUsername, $storedPassword) = explode(':', $user);

    if ($username === $storedUsername) {
        if (password_verify($password, $storedPassword)) {
            $_SESSION['username'] = $username;
            header('Location: products.html');
            exit;
        }
    }
}

header('Location: login.php?error=1');
exit;
?>