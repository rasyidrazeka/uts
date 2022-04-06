<html>
    <head>
        <title>Konfirmasi Upload</title>
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

        <div class="upFoto">
            <?php
                $target_path="foto/";

                $target_path=$target_path . basename($_FILES['uploadedfile']['name']);

                if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)){
                    echo "Foto menu " . basename($_FILES['uploadedfile']['name'])." telah terupload";
                }else{
                    echo "Terjadi error saat mengupload, silahkan mencoba lagi!!";
                }
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