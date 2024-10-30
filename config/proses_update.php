<?php
require "./config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "UPDATE testbe SET email='$email', password='$password' WHERE nim='$nim'";
    if (mysqli_query($sambung, $query)) {
        header("Location: ./dashboard1.php?message=Update successful");
    } else {
        echo "Error updating record: " . mysqli_error($sambung);
    }
}
?>
