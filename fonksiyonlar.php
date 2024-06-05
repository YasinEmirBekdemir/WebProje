<?php

function baglan() {
    // Veritabanı bağlantı bilgilerinizi buraya ekleyin
    $dbhost = "localhost";
    $dbname = "telefon_rehberi";
    $dbuser = "root";
    $dbpass = "";

    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}

function listeleKisiler() {
    $db = baglan();
    $sql = "SELECT * FROM kisiler";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $kisiler = $stmt->fetchAll();
    $db = null;
    return $kisiler;
}

function getKisiById($id) {
    $db = baglan();
    $sql = "SELECT * FROM kisiler WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $kisi = $stmt->fetch();
    $db = null;
    return $kisi;
}

function ekleKisi($ad, $soyad, $telefon) {
    $db = baglan();
    $sql = "INSERT INTO kisiler (ad, soyad, telefon) VALUES (:ad, :soyad, :telefon)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':ad', $ad);
    $stmt->bindParam(':soyad', $soyad);
    $stmt->bindParam(':telefon', $telefon);
    $stmt->execute();
    $db = null;
}

function guncelleKisi($id, $ad, $soyad, $telefon) {
    $db = baglan();
    $sql = "UPDATE kisiler SET ad = :ad, soyad = :soyad, telefon = :telefon WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':ad', $ad);
    $stmt->bindParam(':soyad', $soyad);
    $stmt->bindParam(':telefon', $telefon);
    $stmt->execute();
    $db = null;
}

function silKisi($id) {
    $db = baglan();
    $sql = "DELETE FROM kisiler WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $db = null;
}

?>