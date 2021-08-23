<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styling_gamefinity.css?<?=filemtime('styling_gamefinity.css');?>">
    <?php 
        include '../head_tag.php';
    ?>
    <title>Gamefinity</title>>
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

        <p class="tulisanEditor">Tentang Kami</p>
        <div class="deskripsiKami">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae commodo est. Quisque vel metus lobortis, fermentum odio ultricies, faucibus lacus. Aliquam justo neque, ultricies sed maximus at, fermentum non tellus. Nulla sed porta neque. Donec leo mauris, dictum a condimentum eget, egestas eu nunc. Fusce eu blandit metus, eget commodo risus. Mauris pharetra, orci semper blandit ultricies, ligula lectus semper tellus, a faucibus eros nisl sed risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sed auctor magna. Quisque eros mi, laoreet eu magna quis, porta suscipit massa. Quisque faucibus aliquet lacus, non elementum dui sollicitudin sed. Vivamus lacinia tristique tempor. Aliquam erat volutpat.
            </p> <br>

            <p>
            Aenean justo sapien, pulvinar vitae molestie in, facilisis sit amet turpis. Aliquam sit amet ipsum facilisis, volutpat eros at, rhoncus augue. Suspendisse fringilla accumsan facilisis. Quisque mattis eros in risus vestibulum pulvinar. Fusce ac elit vitae risus porta posuere facilisis et augue. Maecenas blandit convallis risus, sit amet viverra justo. Mauris elit lectus, dapibus ut blandit quis, dapibus in dui. Nam semper tortor ut dolor accumsan, sed semper diam accumsan. Phasellus nec risus massa.  
            </p> <br>

            <p>
            Sed suscipit eleifend dolor, suscipit tincidunt quam consectetur a. Maecenas scelerisque risus a purus dictum dictum nec eget purus. Curabitur posuere erat sem, ac placerat massa sollicitudin sed. Ut consequat fermentum metus. Donec lobortis tempus elit elementum cursus. Suspendisse potenti. Mauris ac dapibus massa. Suspendisse id ante in tellus dapibus suscipit. Curabitur sodales nisi mauris, id malesuada leo tincidunt sit amet. Nam in aliquet ipsum. Maecenas ultrices ultrices sapien et dictum. Fusce vel est venenatis, molestie purus sit amet, porta orci. Donec hendrerit justo nibh, eget commodo sapien faucibus non.
            </p>
        </div>

        <p class="tulisanEditor">Catatan</p>
        <div class="deskripsiKami" style="margin-bottom: 5vh">
            <p>
                Template ini di desain oleh Heru dan di code dari awal oleh Alit Putra Arthadi 
            </p>
        </div>

</div>


    
</body>
</html>