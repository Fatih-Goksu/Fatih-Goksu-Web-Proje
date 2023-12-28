<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sipariş Sayfası</title>
    <link rel="stylesheet" href="siparis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>


<header>
<?php 
        include("navbar.php");
        
        ?>
    </header>

    <div class="clock_animation">

    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

<dotlottie-player src="https://lottie.host/5e203f2a-6a82-418f-9f05-05064c00821f/lMZWwnNB7f.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>

<h2 class="animate__animated animate__fadeInDown"> Tebrikler! Taco Fırtınası Siparişiniz hazırlanıyor...</h2>
<p class="animate__animated animate__fadeInDown"> Siparişiniz hazır olduğunda bilgilendirme mesajı alacaksınız. Kuryemiz siparişi teslim etmeden önce sizi arayacaktır.</p>

    </div>
    
</body>
</html>