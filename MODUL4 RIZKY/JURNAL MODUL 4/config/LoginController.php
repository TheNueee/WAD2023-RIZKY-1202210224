<?php

require 'connect.php';

// function untuk melakukan login
function login($input) {

    // (1) Panggil variabel global $db dari file config
    global $conn;
    // 

    // (2) Ambil nilai input dari form login
        // a. Ambil nilai input email
        
        // b. Ambil nilai input password
        $email = $input['email'];
        $password = $input['password'];
    // 

    // (3) Buat dan lakukan query untuk mencari data dengan email yang sama
        $queryuser = "SELECT * FROM users WHERE email ='$email'";
        $res = mysqli_query($conn, $queryuser);
    // 

    // (4) Buatlah perkondisian ketika email ditemukan ( gunakan mysqli_num_rows == 1 )

        // a. Simpan hasil query menjadi array asosiatif menggunakan fungsi mysqli_fetch_assoc
        
        // 

        // b. Lakukan verifikasi password menggunakan fungsi password_verify
            
            // c. Set variabel session dengan key login untuk menyimpan status login
            
            // d. Set variabel session dengan key id untuk menyimpan id user
            
            //

            // e. Buat kondisi untuk mengecek apakah checkbox "remember me" terisi kemudian set cookie dan isi dengan id
            
            // 
        // f. Buat kondisi else dan isi dengan variabel session dengan key message untuk meanmpilkan pesan error ketika password tidak sesuai
        
        // 
        if(mysqli_num_rows($res) == 1){
            $dat = mysqli_fetch_assoc($res);
            $_SESSION["login"] = true;
            $_SESSION["id"] = $dat['id'];

            if(isset($input['remember'])){
                setcookie("id", $dat['id'], time() + 3600);
            }else{
                $_SESSION['message'] = "pasword tidak sesuai";
                $_SESSION['color'] = 'danger';
            }
        }
        
    // 

    // (5) Buat kondisi else, kemudian di dalamnya
    //     Buat variabel session dengan key message untuk menampilkan pesan error ketika email tidak ditemukan
        else{
            $_SESSION['message'] = "email tidak ditemukan";
            $_SESSION['color'] = 'danger';
        }
    // 
}
// 

// function untuk fitur "Remember Me"
function rememberMe($cookie)
{
    // (6) Panggil variabel global $db dari file config
    global $conn;
    // 

    // (7) Ambil nilai cookie yang ada
    $id = $_COOKIE['id'];
    // 

    // (8) Buat dan lakukan query untuk mencari data dengan id yang sama
    $querykuki = "SELECT * FROM users WHERE id = '$id'";
    $has = mysqli_query($conn, $querykuki);
    // 

    // (9) Buatlah perkondisian ketika id ditemukan ( gunakan mysqli_num_rows == 1 )

        // a. Simpan hasil query menjadi array asosiatif menggunakan fungsi mysqli_fetch_assoc

        // b. Set variabel session dengan key login untuk menyimpan status login
        
        // c. Set variabel session dengan key id untuk menyimpan id user
    if(mysqli_num_rows($has)==1){
        $ata = mysqli_fetch_assoc($has);
        $_SESSION['login'] = true;
        $_SESSION['id'] = $ata=['id'];
    }
    
    // 
}
// 

?>