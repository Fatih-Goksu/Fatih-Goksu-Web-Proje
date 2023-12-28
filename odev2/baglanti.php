<?php 

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="odev1";

$baglan=mysqli_connect($vt_sunucu , $vt_kullanici , $vt_sifre , $vt_adi);

if(!$baglan)
{
    die("veri tabinna baglanmadi".mysqli_connect_error());
}


?>