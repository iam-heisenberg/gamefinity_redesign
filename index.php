<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styling_index.css?<?=filemtime('styling_index.css');?>">
    <?php 
        include '../head_tag.php';
    ?>
    <title>Gamefinity</title>
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

        <!-- editor's pick -->
        <p class="tulisanEditor">Editor's Pick</p>
        <div class="divisiEditorPick">
                <!-- kalo udah backendnya, buat looping disini -->
                <a href="#" class="enkapsulasiMenuHot"><div class="menuHot">
                    <img src="../resource/no_image.jpg" class="gambarHot">
                    <p class="judulHot">permudah-beli-game-steam-tambahkan-dana-sebagai-metode-pembayaran</p>
                    <p class="writer">Ini writer · Waktu membaca 4 menit </p>
                </div></a>

                <a href="#" class="enkapsulasiMenuHot"><div class="menuHot">
                    <img src="../resource/no_image.jpg" class="gambarHot">
                    <p class="judulHot">Ini hanyalah contoh dari judul berita hot okeh sdfdsfds sdfdsf dsfdsfdsdsdsf </p>
                    <p class="writer">Ini writer · Waktu membaca 4 menit </p>
                </div></a>

                <a href="#" class="enkapsulasiMenuHot"><div class="menuHot">
                    <img src="../resource/no_image.jpg" class="gambarHot">
                    <p class="judulHot">Ini hanyalah contoh dari judul berita hot okeh sdfdsfsdfdsfds dsfdsfdsfds fcvcxv cxvcxv dsfdsfdsfdsf xzcxzc sdfsfdsf dsfsdf </p>
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
        <p class="tulisanEditor">Latest News</p>
        <div class="beritaBaru">
            <a href="" class="itemBeritaBaru">
                <img src="../resource/no_image.jpg" class="beritaGambar">
                <div class="deskripsiBerita">
                    <p class="judulBerita">Ini merupakan judul beritanya okeh, gatau gimana nanti asdasdas asdasdas ass  dsadasdd </p>
                    <p class="writerBerita">Ini writer · Waktu membaca 10 menit</p>
                </div>
            </a>

            <div class="garis"></div>

            <a href="" class="itemBeritaBaru">
                <img src="../resource/no_image.jpg" class="beritaGambar">
                <div class="deskripsiBerita">
                    <p class="judulBerita">permudah beli game steam tambahkan dana sebagai metode  y67h pembayaran</p> 
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