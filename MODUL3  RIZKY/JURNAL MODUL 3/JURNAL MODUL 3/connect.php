<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$uname = "root";
$pass = "";
$db =  "wad_modul3_rizky";
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
$conn = new mysqli($host, $uname, $pass, $db);

if($conn --> connect_error){
    die("koneksi gagal". $conn -> connect_error);
}
// 
?>