<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Adı</title>
    <link rel="stylesheet" href="styless.css">
    <script src="script.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
        <?php 
        include("navbar.php");
        
        ?>
    </header>

    <section class="main-content">
        <div class="container">
            <div class="content-wrapper">
                <img id="specialImage" src="img/yemek.png" alt="Özel Ürün Resmi" onclick="showSpecialText()">
            </div>
            <div class="content-wrapper">
                <h1 id="h1-ürün">ÜRÜNLERİMİZİ GÖRMEK İÇİN RESME TIKLAYINIZ !!!</h1>
                <h2 id="h2-ürün"></h2>
            </div>
        </div>
    </section>


    <section class="restaurant-section">
        <div class="container2">
            <div class="content-wrapper">
                <img src="img/mekan2.png" id="mekan2" alt="Restoran İç Mekan Resmi">
            </div>
            <div class="content-wrapper">               
                <p>Mekanımız, %100 temizlik garantisi sunan bir atmosferle sizi ağırlıyor. Rahatlığınızı ön planda tutarak seçtiğimiz sandalyeler, keyifli bir oturum vadediyor. İlgi çekici ve refahı destekleyen renklerle dekore edilmiş mekanımızda, sizleri bekliyoruz. Huzurlu ve samimi bir ortamda lezzet dolu anlar geçirmek için sizi ağırlamaktan mutluluk duyacağız.</p>
            </div>
            
        </div>
    </section>


    <section class="restaurants-section">
        <div class="container">
            <div class="restaurant">
                <img src="img/mutfak.png" alt="Restoran Resmi 1">
            </div>
            <div class="restaurant">
                <img src="img/calisan.png" alt="Restoran Resmi 2">
            </div>
            <div class="restaurant">
                <img src="img/dışmekan.png" alt="Restoran Resmi 3">
            </div>
            <div class="restaurant">
                <img src="img/dışmekan2.png" alt="Restoran Resmi 3">
            </div>
            
        </div>
    </section>



    <footer>
    <?php 
        include("footer.php");
        
        ?>
    </footer>

    
</body>
</html>


<?php 

include("baglanti.php");

?>