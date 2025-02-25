<?php
    session_start();
    if (! isset($_SESSION['users'])) {
        header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title> halaman login</title>
</head>
<body style="text-align: center;">
        <h1>halaman Admin</h1>
        <a href= "index.php">Home</a>
        <a href= "logout.php">Logout</a>
        <hr>
        <h3>selamat datang,nama user</h3>
        halaman ini akan tampil setelah user login
        
        
</body>
</html>
