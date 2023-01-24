<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" constant="width=device-width, initial-scale=1">
    <title>Warungkita</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
   <!-- header -->
   <header>
    <div class="container">
        <h1><a href="dashboard.php">Warungkita</a></h1>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="data-kategori.php">Data Katagori</a></li>
            <li><a href="data-produk.php">Data Produk</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </div>
   </header>

    <!--content-->
    <div class="section">
        <div class="container">
           <h3>Tambah Data</h3>
           <div class="box">
            <form action="" method="POST">
                <input type="text" name="nama" placeholder="Nama kategori" class="input-control" require>
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
            <?php 
                if(isset($_POST['submit'])){

                    $nama = ucwords($_POST['nama']);

                    $insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (null,'".$nama."') ");
                    if($insert){
                        echo '<script>alert("Tambah Data Berhasil")</script>';
                        echo '<script>window.location="data-kategori.php"</script>';
                    }else{
                        echo 'gagal'.mysqli_error($conn);
                    }
                }
            ?>
           </div> 
        </div>
    </div> 

    <!--footer-->
    <footer>
        <div class="container">
        <small>copyright &copy; 2023 - Warungkita</small>
        </div>
        </footer>
</body>
</html>