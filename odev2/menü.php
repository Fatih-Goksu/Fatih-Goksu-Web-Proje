<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Menü Sayfası</title>
    
    <link rel="stylesheet" href="menü.css">
    <link rel="stylesheet" href="styless.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<header>
<?php 
        include("navbar.php");
        
        ?>
    </header>
    
    <section class="menu-page">
    <div class="background-image"></div>
    <div class="content">
        <h1>Menülerimiz</h1>

        <div class="menu-items-container">
            <div class="menu-item">
                <img src="img/anadolu.png" alt="Menu 1">
                <div class="menu-info">
                    <h2>Anadolu Mutfağı Şöleni</h2>
                    <p>Damakları coşturan, yöresel lezzetlerle hazırlanmış geleneksel Anadolu yemeklerinin enfes bir birleşimi. Bu menüde, anne eli değmiş gibi hissedeceksiniz.</p>
                    <p>İçerik: Humus, kısır, yaprak sarma, hünkarbeğendi, içli köfte, baklava.</p>
                    <button onClick="window.open('siparis.php', '_blank')">Sipariş Ver</button>
                </div>
            </div>

            <div class="menu-item">
                <img src="img/deniz.png" alt="Menu 2">
                <div class="menu-info">
                    <h2>Denizaltı Şöleni</h2>
                    <p>Taptaze deniz ürünleriyle hazırlanan bu menü, denizin tuzlu lezzetlerini şehrinize getiriyor. Balık, karides ve kalamarın dansıyla sofranızı süsleyin.</p>
                    <p>İçerik: Sushi çeşitleri, karides kokteyli, ızgara levrek, kalamar tava, midye dolma, cheesecake.</p>
                    <button onClick="window.open('siparis.php', '_blank')">Sipariş Ver</button>
                </div>
            </div>

            <div class="menu-item">
                <img src="img/sebze.png" alt="Menu 2">
                <div class="menu-info">
                    <h2>Yeşil Bahçe</h2>
                    <p>Sağlıklı ve lezzetli bir alternatif arayanlar için ideal bir seçenek. Bu menü, sebzelerin renkli dünyasını keşfetmeniz için size bir davet.</p>
                    <p>Quinoa salatası, sebzeli noodle, fırın sebzeli güveç, ıspanaklı börek, meyve salatası, chia pudding.</p>
                    <button onClick="window.open('siparis.php', '_blank')">Sipariş Ver</button>
                </div>
            </div>

            <div class="menu-item">
                <img src="img/tako.png" alt="Menu 2">
                <div class="menu-info">
                    <h2>Taco Fırtınası</h2>
                    <p>Baharatların ve Meksika mutfağının büyülü dünyasına bir yolculuk yapın. Taco, burrito ve salsa ile dolu bu menü, damaklarınıza Meksika'nın sıcaklığını getirecek.</p>
                    <p> Guacamole, taco çeşitleri, enchiladas, quesadilla, mısır ekmeği, tres leches pastası.</p>
                    <button onClick="window.open('siparis.php', '_blank')">Sipariş Ver</button>
                </div>
            </div>

            <div class="menu-item">
                <img src="img/sushi.png" alt="Menu 2">
                <div class="menu-info">
                    <h2>Sushi Rüyası</h2>
                    <p>Uzak doğunun eşsiz tatlarıyla tanışın. Sushi, sashimi ve tempura gibi Japon mutfağının en özel lezzetleri, bu menüde sizleri bekliyor.</p>
                    <p>İçerik: Nigiri sushi, sashimi tabağı, tempura karides, miso çorbası, edamame, mochi tatlısı.</p>
                    <button onClick="window.open('siparis.php', '_blank')">Sipariş Ver</button>
                </div>
            </div>

            

            

            <!-- Daha fazla menu-item ekleyebilirsiniz -->
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