<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$link = mysqli_connect('127.0.0.1', 'root', 'kali');
if(!$link) {
    die('Error:'. mysqli_error());
}
echo 'Good!';
mysqli_close($link);
?>
