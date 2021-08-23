<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styling_kategori.css?<?=filemtime('styling_kategori.css');?>">
    <?php 
        include '../head_tag.php';
    ?>
    <title>Kategori</title>
</head>
<body>
    <div class="enkapsulasi">
        <div class="search">
            <form action="index.php" method="post" class="cari">
                <input type="text" class="text_cari"  placeholder="Cari Kategori">
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
        <!-- navigation bar -->

        <p class="kategori">Kategori</p>
        <!-- looping dari mysqli -->
        <div class="bungkusKategori">
            <a href="#" class="textKategori">Ini contoh kategori</a>
        </div>

        <div class="pembatas"></div>

        <div class="bungkusKategori">
            <a href="#" class="textKategori">Ini contoh kategori</a>
        </div>

        <div class="pembatas"></div>

        <div class="bungkusKategori">
            <a href="#" class="textKategori">Ini contoh kategori</a>
        </div>

        <div class="pembatas"></div>

        <div class="bungkusKategori">
            <a href="#" class="textKategori">Ini contoh kategori</a>
        </div>
        
      


    </div>
</body>
</html>