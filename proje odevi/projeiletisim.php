<?php
echo "<h1>Gönderilen Bilgiler</h1>";
$adSoyad = $_POST["adsoyad"];
$email = $_POST["email"];
$telefon = $_POST["telefon"];
$konu = $_POST["konu"];
$aciklama = $_POST["aciklama"];
$izin = $_POST["izin"];
echo "<b>Ad Soyad :</b>".$adSoyad."<br>";
echo "<b>E-mail   :</b>".$email."<br>";
echo "<b>Telefon  :</b>".$telefon."<br>";
echo "<b>Konu     :</b>".$konu."<br>";
echo "<b>Aciklama :</b>".$aciklama."<br>";
echo "<b>İzin     :</b>".$izin."<br>";
?>
