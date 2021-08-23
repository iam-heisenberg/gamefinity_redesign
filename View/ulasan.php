<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styling_ulasan.css?<?=filemtime('styling_ulasan.css');?>">
    <?php 
        include '../head_tag.php';
    ?>
    <title>Ulasan</title>
</head>
<body>
<div class="enkapsulasi">
        <div class="search">
            <form action="index.php" method="post" class="cari">
                <input type="text" class="text_cari"  placeholder="Cari Ulasan">
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

        <!-- editor's pick -->
        <p class="tulisanEditor">Top Review</p>
        <div class="divisiEditorPick">
                <!-- kalo udah backendnya, buat looping disini -->
                <a href="#" class="enkapsulasiMenuHot"><div class="menuHot">
                    <img src="../resource/no_image.jpg" class="gambarHot">
                    <p class="judulHot">Ini hanyalah contoh dari judul berita hot okeh</p>
                    <p class="writer">Ini writer · Waktu membaca 4 menit </p>
                </div></a>

                <a href="#" class="enkapsulasiMenuHot"><div class="menuHot">
                    <img src="../resource/no_image.jpg" class="gambarHot">
                    <p class="judulHot">Ini hanyalah contoh dari judul berita hot okeh</p>
                    <p class="writer">Ini writer · Waktu membaca 4 menit </p>
                </div></a>

                <a href="#" class="enkapsulasiMenuHot"><div class="menuHot">
                    <img src="../resource/no_image.jpg" class="gambarHot">
                    <p class="judulHot">Ini hanyalah contoh dari judul berita hot okeh</p>
                    <p class="writer">Ini writer · Waktu membaca 4 menit </p>
                </div></a>

                <a href="#" class="enkapsulasiMenuHot"><div class="menuHot">
                    <img src="../resource/no_image.jpg" class="gambarHot">
                    <p class="judulHot">Ini hanyalah contoh dari judul berita hot okeh</p>
                    <p class="writer">Ini writer · Waktu membaca 4 menit </p>
                </div></a>

                <a href="#" class="enkapsulasiMenuHot"><div class="menuHot">
                    <img src="../resource/no_image.jpg" class="gambarHot">
                    <p class="judulHot">Ini hanyalah contoh dari judul berita hot okeh</p>
                    <p class="writer">Ini writer · Waktu membaca 4 menit </p>
                </div></a>

                <a href="#" class="enkapsulasiMenuHot"><div class="menuHot">
                    <img src="../resource/no_image.jpg" class="gambarHot">
                    <p class="judulHot">Ini hanyalah contoh dari judul berita hot okeh</p>
                    <p class="writer">Ini writer · Waktu membaca 4 menit </p>
                </div></a>
        </div>
        <!-- ----- -->

        <!-- berita baru + ajax loh ini -_-" -->
        <p class="tulisanEditor">Latest Review</p>
        <div class="beritaBaru">
            <a href="" class="itemBeritaBaru">
                <img src="../resource/no_image.jpg" class="beritaGambar">
                <div class="deskripsiBerita">
                    <p class="judulBerita">Ini merupakan judul beritanya okeh, gatau gimana nanti </p>
                    <p class="writerBerita">Ini writer · Waktu membaca 10 menit</p>
                </div>
            </a>

            <div class="garis"></div>

            <a href="" class="itemBeritaBaru">
                <img src="../resource/no_image.jpg" class="beritaGambar">
                <div class="deskripsiBerita">
                    <p class="judulBerita">Ini merupakan judul beritanya okeh, gatau gimana nanti </p>
                    <p class="writerBerita">Ini writer · Waktu membaca 10 menit</p>
                </div>
            </a>


            <a href="" class="itemBeritaBaru">
                <img src="../resource/no_image.jpg" class="beritaGambar">
                <div class="deskripsiBerita">
                    <p class="judulBerita">Ini merupakan judul beritanya okeh, gatau gimana nanti </p>
                    <p class="writerBerita">Ini writer · Waktu membaca 10 menit</p>
                </div>
            </a>


            <a href="" class="itemBeritaBaru">
                <img src="../resource/no_image.jpg" class="beritaGambar">
                <div class="deskripsiBerita">
                    <p class="judulBerita">Ini merupakan judul beritanya okeh, gatau gimana nanti </p>
                    <p class="writerBerita">Ini writer · Waktu membaca 10 menit</p>
                </div>
            </a>
            
        </div> 
    
    </div>
</body>
</html>