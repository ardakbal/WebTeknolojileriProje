<?php 
    // userLoginProcess.php

    // Formdan gelen verileri alalım
    $kullanici_ad = $_POST["txtKullaniciAdi"];
    $parola = $_POST["txtParola"];

    // Geçerli USR pass bilgisi
    $yetkiliUSR = "arda";
    $yetkiliPWD = "123456";
    
    // Nereden çağrıldı kontrol et
    if(! count($_POST)) {
        echo "Bu dosyayı direkt erişim yapamazsınız!<br>";
        echo "<a href='ho7.html'> Forma geri dön </a>";
    }

    // Formdaki değişkenleri kontrol er
    if($kullanici_ad == $yetkiliUSR && $parola == $yetkiliPWD){
        echo "<h2> Hoşgeldin $kullanici_ad !</h2>";
        echo "<h3>Başarılı bir şekilde giriş yaptınız.</h3>";
    }
    else{
        echo "<h2> Giriş başarısız! </h2>";
        echo "<h3> Kullanıcı adı veya parola hatalı!</h3>";
        echo "<a href='ho7.html'> Tekrar deneyin. </a>";
    }

    // Doğru ise aşağıdaki işlemleri yap
?>