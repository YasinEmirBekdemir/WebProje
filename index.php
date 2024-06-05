<?php
require 'fonksiyonlar.php';

$kisiler = listeleKisiler();

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Telefon Defteri</title>
</head>
<body>
    <h1>Telefon Defteri</h1>

    <a href="kisi_ekle.php">Yeni Kişi Ekle</a>

    <table>
        <thead>
            <tr>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Telefon</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kisiler as $kisi): ?>
                <tr>
                    <td><?php echo $kisi['ad']; ?></td>
                    <td><?php echo $kisi['soyad']; ?></td>
                    <td><?php echo $kisi['telefon']; ?></td>
                    <td>
                        <a href="kisi_duzenle.php?id=<?php echo $kisi['id']; ?>">Düzenle</a>
                        <a href="kisi_sil.php?id=<?php echo $kisi['id']; ?>">Sil</a>
                        <a href="kisi_kart.php?id=<?php echo $kisi['id']; ?>">Kart</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
</html>