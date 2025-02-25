<?php  
// inisialisasi session
session_start();

// mengecek apakah ada user yang aktif, jika tidak arahkan ke login.php
if(!isset($_SESSION['users'])) {
    header('location:login.php'); // arahkan ke login.php
}
?>
<?php 
    include_once 'header.php';
?>
<?php 
    include_once 'sidebar.php';
    include_once 'home.php';
    
?>
<?php 
    include_once 'footer.php';
?>