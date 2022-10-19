<?php
require "config.php";
require "cipher/encrypt.php";
$sql = "SELECT * FROM user WHERE username = '$user' ";
$query = $db->query($sql);
if ($query->num_rows != 0) {
    echo "<div style='font-family:arial;'>";
    echo "<div>username Sudah Terdaftar! <a href='index'>Back</a></div>";
} else {
    if (!$user || !$pass) {
        echo "<div>Masih ada data yang kosong! <a href='index'>Back</a>";
    } else {
        $data = "INSERT INTO user VALUES (NULL, '$user', '$pass')";
        $simpan = $db->query($data);
        if ($simpan) {
            echo "<div>Pendaftaran Sukses, Silahkan <a href='index'>Login</a></div>";
        } else {
            echo "<div>Proses Gagal!</div>";
        }
    }
}
if (isset($user)) {
    
    echo "<br>Key: <b>" . $key . "</b><br>";
    echo "Username: <b>" . $username . "</b><br>";
    echo "Encripted Text: <b>" . $user . "</b><br>";
}
if (isset($pass)) {
    echo "Password: <b>" . $password . "</b><br>";
    echo "Encripted Text: <b>" . $pass . "</b><br></div>";
}
?>

