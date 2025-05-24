<?php
// Kullanıcıdan gelen verileri al
$kullaniciadi = $_POST['kullanıcı_adı'] ?? '';
$sifre = $_POST['sifre'] ?? '';

// Geçerli kullanıcı bilgileri (
$valid_kullaniciadi = "b241210038@sakarya.edu.tr";
$valid_sifre = "b241210038"; 
// E-posta formatı kontrolü 
if (!filter_var($kullaniciadi, FILTER_VALIDATE_EMAIL) || !str_ends_with($kullaniciadi, '@sakarya.edu.tr')) {
    
    header("Location: projelogin.html");
    exit;
}

// Şifre kontrolü
if ($kullaniciadi === $valid_kullaniciadi && $sifre === $valid_sifre) {
    echo "<h1>Hoşgeldiniz " . htmlspecialchars($sifre) . "</h1>";
} else {
    
    header("Location: projelogin.html");
    exit;
}
?>