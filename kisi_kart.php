<?php
require 'fonksiyonlar.php';

$id = $_GET['id'];
$kisi = getKisiById($id);

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $kisi['ad'] . " " . $kisi['soyad']; ?></title>
</head>
<body>
    <h1>Kişi Kartı</h1>

    <p>Ad: <?php echo $kisi['ad']; ?></p>
    <p>Soyad: <?php echo $kisi['soyad']; ?></p>
    <p>Telefon: <?php echo $kisi['telefon']; ?></p>

    <a href="tel:<?php echo $kisi['telefon']; ?>">Ara</a> <a href="kisi_duzenle.php?id=<?php echo $kisi['id']; ?>">Düzenle</a>
    <a href="kisi_sil.php?id=<?php echo $kisi['id']; ?>">Sil</a>

    <a href="index.php">Kişi Listesine Dön</a>
</body>
</html>