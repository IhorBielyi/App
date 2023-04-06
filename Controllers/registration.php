<?php
session_start();


echo "<pre>";
print_r($_POST);
echo "<pre>";



echo "<pre>";
print_r($_SERVER);
echo "<pre>";


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['alerts'] = 'Method not allowed';
    header('Location: http://projecttest/');
}


?>