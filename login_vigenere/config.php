<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "vigenere";
   $db = new mysqli($hostname, $username, $password, $dbname);
   if($db){
      echo "koneksi berhasil";
   }
?>