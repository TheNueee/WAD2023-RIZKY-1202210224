<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$uname = "root";
$pass = "";
$db =  "wad_modul4_rizky";
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
$conn = new mysqli($host, $uname, $pass, $db);

if($conn -> connect_error){
    die("koneksi gagal". $conn -> connect_error);
}
// 
 
?>