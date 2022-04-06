<!DOCTYPE html>
<html>
    <head>
        <style>
            .error (color: #FF0000;)
        </style>
        <title>Hasil Penghitungan</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Rinjani Resto</h2>
            <div class="menu">
                <a href="home.html"><b>Home</b></a>
                <a href="transaksi.html"><b>Transaksi</b></a>
                <a href="formFoto.html"><b>Tambah Foto</b></a>
            </div>
        </div>
        <div class="isioutput">
        <?php
            $nama = $_POST['nama'];
            $status = $_POST['status'];
            $menu = $_POST['menu'];
            $jumlah = $_POST['jumlah'];
    
            if($status == "member"){
                if($menu == "paket1"){
                    $harga = 20000;
                    if($jumlah == 1){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.05)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah == 2 || $jumlah == 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.07)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.10)*$jumlah;
                        $bayar = $total - $diskon;
                    }
                }else if($menu == "paket2"){
                    $harga = 30000;
                    if($jumlah == 1){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.05)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah == 2 || $jumlah == 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.07)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.10)*$jumlah;
                        $bayar = $total - $diskon;
                    }
                }else if($menu == "paket3"){
                    $harga = 50000;
                    if($jumlah == 1){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.05)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah == 2 || $jumlah == 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.07)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.10)*$jumlah;
                        $bayar = $total - $diskon;
                    }
                }
            }else if($status == "non-member"){
                if($menu == "paket1"){
                    $harga = 20000;
                    if($jumlah >=1 && $jumlah <=5){
                        $total = $harga * $jumlah;
                        $diskon = 0;
                        $bayar = $total - $diskon;
                    }else if($jumlah >=6 || $jumlah <=10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.05;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.07;
                        $bayar = $total - $diskon;
                    }
                }else if($menu == "paket2"){
                    $harga = 30000;
                    if($jumlah >=1 && $jumlah <=5){
                        $total = $harga * $jumlah;
                        $diskon = 0;
                        $bayar = $total - $diskon;
                    }else if($jumlah >=6 || $jumlah <=10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.05;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.07;
                        $bayar = $total - $diskon;
                    }
                }else if($menu == "paket3"){
                    $harga = 50000;
                    if($jumlah >=1 && $jumlah <=5){
                    $total = $harga * $jumlah;
                        $diskon = 0;
                        $bayar = $total - $diskon;
                    }else if($jumlah >=6 || $jumlah <=10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.05;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.07;
                        $bayar = $total - $diskon;
                    }
                }
            }
            echo "<h3> Total Transaksi </h3><br>";
            echo "<b>Nama pembeli : $nama <br>";
            echo "<b>Status pembeli : $status <br>";
            echo "<b>Total harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $total <br>";
            echo "<b>Total diskon &nbsp;&nbsp;&nbsp;: $diskon <br><br>";
            echo "<b>Yang harus dibayarkan $bayar <br>";
        ?>
        </div>
        <div class="footer">
            <center>
                <h2>Jl. Penanggungan No. 33, Bandar Lor, Kec. Mojoroto, Kediri, Jawa timur 64114</h2>
                <h2>Telp : 089516517115</h2>
                <h5>&copy; Copyright 2022 Rinjani Resto</h5>
            </center>
        </div>
    </body>
</html>