<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
        


    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
        <!-- <table class="table table-striped">
            <tr>
                <th scope='col'>id</th>         
                <th scope='col'>Nama Mobil</th>
                <th scope='col'>Brand Mobil</th>
                <th scope='col'>Warna Mobil</th>
                <th scope='col'>Tipe Mobil</th>
                <th scope='col'>Harga Mobil</th>
            </tr>
        </table> -->
            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)

            $query = "SELECT * FROM showroom_mobil";
            $result = $conn->query($query);
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->

        if  ($row = $result > 0 ){
            while ($row = $result -> fetch_assoc()){
                echo
                "<tr><td>".
                $row['id'].
                "<tr><td>".
                $row['nama_mobil'].
                "<tr><td>".
                $row['brand_mobil'].
                "<tr><td>".
                $row['warna_mobil'].
                "<tr><td>".
                $row['tipe_mobil'].
                "<tr><td>".
                $row['harga_mobil'].
                "<tr><td>"
                <a href='form_detail_mobil.php? id=". $row[id]. "'button class='btn btn-primary id='detail'>DETAIL</a></td></tr>';
            }
            echo"</tbody></table>";








            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->
        }else{
            echo"tidak ada isi";   
        }
        $conn->close();
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
