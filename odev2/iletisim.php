
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="iletişim.css">
    <link rel="stylesheet" href="styless.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <header>
    <?php 
        include("navbar.php");
        
        ?>
    </header>

    <div class="container">
        <h1 id="iletişim-h1">İLETİŞİM FORMU</h1>
        <div class="section">
            <div class="form-section">
                <form action="iletisim.php" method="post">
                    <div class="form-group">
                        <label for="name">Adınız:</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="surname">Soyadınız:</label>
                        <input type="text" id="surname" name="surname" required>
                    </div>

                    <label for="email">E-posta Adresiniz:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Telefon Numaranız:</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Örnek: 555-555-5555" required>

                    <label for="message">Mesajınız:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <input type="submit" value="Gönder">
                </form>
            </div>
        </div>

        <div class="image-section">
        <a href="https://maps.app.goo.gl/d567GVN2nEGCqWVi6"><img src="/ödev1/img/konum2.png" alt="Açıklama"></a>
    </div>
    </div>


    <footer>
    <?php 
        include("footer.php");
        
        ?>
    </footer>
    
</body>
</html>


<?php 

include("baglanti.php");

if(isset($_POST["name"], $_POST["surname"], $_POST["email"], $_POST["phone"],
$_POST["message"] ))
{
    $ad =$_POST["name"];
    $soyad = $_POST["surname"];
    $mail = $_POST["email"];
    $tel = $_POST["phone"];
    $mesaj = $_POST["message"];

    $ekleme="INSERT INTO iletisim (adi, soyadi, eposta, telefon, konu) 
    VALUES ('".$ad."','".$soyad."','".$mail."','".$tel."','".$mesaj."')";


if ($baglan->query($ekleme)===TRUE)
{
    echo "<script>alert('Mesajınız iletilmiştir !!!')</script>";

}


}

?>