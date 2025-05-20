<?php

// sa 
# oha sa

/* za */

echo "sa dünya!\n<br>";
echo "saü bf cs<br>";
printf("Web Teknolojileri<br><br>");

$ad = "Arda";
$ders = "BSM 104 - Web Teknolojileri";

echo $ders;
echo "<br>";
echo $ad;
echo "<br> Formdan gelen AD: ". $_POST["ad"]."<br>";
echo "Formdan gelen SOYAD: ". $_POST["soyad"];

if ($_POST["parola"] != $_POST["parola_tekrar"]) {
    echo "<br><b>Parolalar uyuşmuyor birader!</b></br>";
}

echo "<br>";
print_r($_POST);


?>