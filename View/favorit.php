<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styling_favorit.css?<?=filemtime('styling_favorit.css');?>">
    <?php 
        include '../head_tag.php';
    ?>
    <title>Favorit</title>
</head>
<body>
<div class="enkapsulasi">
        <div class="search">
            <form action="index.php" method="post" class="cari">
                <input type="text" class="text_cari"  placeholder="Cari Artikel">
                <button type="submit" class="button_cari" name="cari"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <!-- judul? -->
        <!-- <p class="textJudul">Gamefinity.id</p> -->
        <div class="divisiHeader1"><p class="textHeader">Any &nbsp</p> <p class="textHeader" style="color: #D32528">Game</p><p class="textHeader">,</p></div>
        <div class="divisiHeader2"><p class="textHeader"> Any Platform.</p></div>
        <!-- ----- -->

        <!-- navigation bar -->
        <div class="navigationBar">
            <?php 
                include "navigasiBar.php"
            ?>
        </div>
        <!-- ----- -->

        <p class="tulisanEditor">Favorit</p>
        <!-- jikalau ada -->
        <div class="beritaBaru">
            <a href="" class="itemBeritaBaru">
                <img src="../resource/no_image.jpg" class="beritaGambar">
                <div class="deskripsiBerita">
                    <p class="judulBerita">Intel Core i Series Generasi ke-11 Merupakan Sebuah Malapetaka Bagi Intel, Kecuali Satu Hal Saja. Apa Itu? </p>
                    <p class="writerBerita">Ini writer · Waktu membaca 10 menit</p>
                </div>
            </a>
        </div>
</div>
</body>
</html>