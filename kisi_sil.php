<?php
require 'fonksiyonlar.php';

$id = $_GET['id'];
silKisi($id);

header('Location: index.php');
exit;