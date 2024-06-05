<?php
require 'fonksiyonlar.php';

if (isset($_POST['ad']) && isset($_POST['soyad']) && isset($_POST['telefon'])) {
    // Veri temizleme
    $ad = trim(strip_tags($_POST['ad']));
    $soyad = trim(strip_tags($_POST['soyad']));
    $telefon = trim(strip_tags($_POST['telefon']));

    // Hata kontrolü
    $hatalar = [];
    if (empty($ad)) {
        $hatalar[] = "Ad alanı boş olamaz.";
    }
    if (empty($soyad)) {
        $hatalar[] = "Soyad alanı boş olamaz.";
    }
    if (empty($telefon)) {
        $hatalar[] = "Telefon numarası alanı boş olamaz.";
    }

    // Hata varsa formu tekrar göster
    if (!empty($hatalar)) {
        echo "<ul>";
        foreach ($hatalar as $hata) {
            echo "<li>$hata</li>";
        }
        echo "</ul>";
        include 'kisi_ekle.php'; // Formu tekrar içe aktar
        exit;
    }

    // Hatasız veriyi işle
    ekleKisi($ad, $soyad, $telefon);
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni Kişi Ekle</title>
</head>
<body>
    <h1>Yeni Kişi Ekle</h1>

    <form action="kisi_ekle.php" method="post">
        <label for="ad">Ad:</label>
        <input type="text" id="ad" name="ad" required>

        <label for="soyad">Soyad:</label>
        <input type="text" id="soyad" name="soyad" required>

        <label for="telefon">Telefon:</label>
        <input type="tel" id="telefon" name="telefon" required>

        <button type="submit">Ekle</button>
    </form>
</body>
</html>