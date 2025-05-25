<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Sonuçları</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <style>
     body {
        background: url('sonucphp.jpg') no-repeat center center fixed; background-size: cover;

    }
     footer 
    {
      text-align: center;
      padding: 20px;
      background: white;
      color: #555;
      margin-top: 100px;
    }
  </style>

</head>
<body>

<?php
// Güvenlik ve temizleme fonksiyonu
function temizle($veri) {
    return htmlspecialchars(trim($veri));
}

// POST ile veri geldiyse işle
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad       = isset($_POST['ad']) ? temizle($_POST['ad']) : 'Belirtilmedi';
    $soyad    = isset($_POST['soyad']) ? temizle($_POST['soyad']) : 'Belirtilmedi';
    $email    = isset($_POST['email']) ? temizle($_POST['email']) : 'Belirtilmedi';
    $telefon  = isset($_POST['telefon']) ? temizle($_POST['telefon']) : 'Belirtilmedi';
    $cinsiyet = isset($_POST['cinsiyet']) ? temizle($_POST['cinsiyet']) : 'Belirtilmedi';
    $dogum    = isset($_POST['dogum']) ? temizle($_POST['dogum']) : 'Belirtilmedi';
    $sehir    = isset($_POST['sehir']) ? temizle($_POST['sehir']) : 'Belirtilmedi';
    $mesaj    = isset($_POST['mesaj']) ? nl2br(temizle($_POST['mesaj'])) : 'Yok';
    $kabul    = isset($_POST['kabul']) ? 'Evet' : 'Hayır';
} else {
    echo '<div class="container mt-5"><div class="alert alert-danger">Form verisi alınamadı.</div></div>';
    exit;
}
?>

<div class="container mt-5">
  <div class="bg-white p-4 rounded shadow">
    <h2 class="mb-4">Gönderilen Bilgiler</h2>
    <ul class="list-group">
      <li class="list-group-item"><strong>Ad:</strong> <?= $ad ?></li>
      <li class="list-group-item"><strong>Soyad:</strong> <?= $soyad ?></li>
      <li class="list-group-item"><strong>Email:</strong> <?= $email ?></li>
      <li class="list-group-item"><strong>Telefon:</strong> <?= $telefon ?></li>
      <li class="list-group-item"><strong>Cinsiyet:</strong> <?= $cinsiyet ?></li>
      <li class="list-group-item"><strong>Doğum Tarihi:</strong> <?= $dogum ?></li>
      <li class="list-group-item"><strong>Şehir:</strong> <?= $sehir ?></li>
      <li class="list-group-item"><strong>Mesaj:</strong> <?= $mesaj ?></li>
      <li class="list-group-item"><strong>Şartları Kabul:</strong> <?= $kabul ?></li>
    </ul>

    <a href="iletisim.html" class="btn btn-secondary mt-4">Forma Geri Dön</a>
  </div>
</div>
  <footer>
  © 2025 | Arda Akbal
</footer>
</body>
</html>
