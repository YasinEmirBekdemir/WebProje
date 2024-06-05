<?php
require 'fonksiyonlar.php';

$id = $_GET['id'];
$kisi = getKisiById($id);

if (isset($_POST['ad']) && isset($_POST['soyad']) && isset($_POST['telefon'])) {
    guncelleKisi($id, $_POST['ad'], $_POST['soyad'], $_POST['telefon']);
    header('Location: index.php'); // Ana sayfaya yönlendirme
    exit;
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kişi Düzenle</title>
</head>
<body>
    <h1>Kişi Düzenle</h1>

    <form action="kisi_duzenle.php?id=<?php echo $id; ?>" method="post">
        <label for="ad">Ad:</label>
        <input type="text" id="ad" name="ad" value="<?php echo $kisi['ad']; ?>" required>

        <label for="soyad">Soyad:</label>
        <input type="text" id="soyad" name="soyad" value="<?php echo $kisi['soyad']; ?>" required>

        <label for="telefon">Telefon:</label>
        <input type="tel" id="telefon" name="telefon" value="<?php echo $kisi['telefon']; ?>" required>

        <button type="submit">Kaydet</button>
    </form>
</body>
</html>