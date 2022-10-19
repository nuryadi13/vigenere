<?php
session_start();
require_once "config.php";
$user = $_POST["username"];
$pass = $_POST["password"];
$key = $_POST["keytext"];
$sql = "SELECT * FROM user WHERE username ='$user' AND password='$pass'";
$query = $db->query($sql);
$hasil = $query->fetch_assoc();
if ($query->num_rows == 0) {
    echo "<div style='font-family:arial;'>";
    echo '<div class="alert alert-danger">*Username belum terdaftar <a href="index" >Kembali</a> </div>';
} else {
    if ($pass != $hasil["password"]) {
        echo '<div class="alert alert-danger">*Password Salah <a href="index" >Kembali</a></div></div>';
    } else {
        $_SESSION["username"] = $hasil["username"];
        header("location:halo/");
        $_SESSION["password"] = $hasil["password"];
        header("location:halo/");
    }
}
?>

