<?php
// harus panggil header donk
header('content-type:image/jpeg');
// include font
$font="BRUSHSCI.TTF";
// gambar diambil dari format jpg
$image=imagecreatefromjpeg("certificate.jpg");
// meng alokasikan warna pada gambar (disini aku alokasikan RGB)
$color=imagecolorallocate($image,19,21,22);
// nama donk
$name="M. Hasin Ilmalik";
// habis nama di deklarasikan, kita langsung bubuhkan
imagettftext($image,50,0,300,420,$color,$font,$name);
// deklarasikan tgl
$date="6th may 2020";
// habis deklarasi, ingat untuk meng aplikasi kan
imagettftext($image,20,0,450,595,$color,"AGENCYR.TTF",$date);
// jadikan deh
imagejpeg($image);
imagedestroy($image);
?>