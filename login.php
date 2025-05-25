<?php
// Formdan gelen verileri al
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Doğru bilgiler
$dogru_kullanici = "b231210024@sakarya.edu.tr";
$dogru_sifre = "b231210024";

// Kontrol et
if ($username === $dogru_kullanici && $password === $dogru_sifre) {
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <title>Hoşgeldiniz</title>
        <style>
            body {
                background: linear-gradient(to right, #74ebd5, #ACB6E5);
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .welcome-box {
                background: white;
                padding: 40px 60px;
                border-radius: 12px;
                box-shadow: 0 8px 20px rgba(0,0,0,0.1);
                text-align: center;
            }
            .welcome-box h1 {
                color: #333;
                margin: 0;
                font-size: 26px;
            }
        </style>
    </head>
    <body>
        <div class='welcome-box'>
            <h1>Hoşgeldiniz, $username</h1>
        </div>
    </body>
    </html>";
} else {
    // Hatalıysa geri login.html'e yönlendir
    header("Location: login.html?error=1");
    exit();
}
?>
