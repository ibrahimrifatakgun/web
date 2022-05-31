<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
    
<?php
/* Php Versiyonunu ve detaylarını gösteren fonksiyondur */
//echo phpinfo();

echo "<h4>Tırnak işaretleri arasındaki farklar</h4>";
$uni= "Adnan Menderes Üniversitesi";
echo "Değişken İçeriği: $uni";
echo "<br>";
echo "1-Kazandığınız Üniversite: \$uni";/*Değişkenin ismini yazdırır.  */
echo "<br>";
echo "2-Kazandığınız Üniversite:" . ' $uni'; /*Değişkenin ismini yazdırır.  */
echo "<br>";
echo "2-Kazandığınız Üniversite: " ."$uni"; /*Değişkenin içeriğini yazdırır  */
echo "<br>";
echo "3-Kazandığınız Üniverstie: " . $uni; /*Değişkenin içeriğini yazdırır  */
echo "<br>";
echo "4-Kazandığınız Üniverstie:  $uni"; /*Değişkenin içeriğini yazdırır  */



echo "<hr><h4>Temel Matematiksel İşlemler</h4>";


echo "<h5>Toplama işlemiz</h5>";
    $sayi1 = 10;
    $sayi2 = 20;

    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";



    echo "<h5>Çıkarma işlemi</h5>";
    $sayi1 = 10;
    $sayi2 = 20;

    $sonuc = '$sayi1 - $sayi2 =' . ($sayi1 - $sayi2);
    echo "<br>";
    echo "$sayi1 - $sayi2 =" . ($sayi1 - $sayi2);
    echo "<br>";
    $sonuc = $sayi1 - $sayi2;
    echo  "$sayi1 - $sayi2 = $sonuc";



    echo "<h5>Bölme işlemi</h5>";
    $sayi1 = 10;
    $sayi2 = 20;

    $sonuc = '$sayi1 / $sayi2 =' . ($sayi1 / $sayi2);
    echo "<br>";
    echo "$sayi1 / $sayi2 =" . ($sayi1 / $sayi2);
    echo "<br>";
    $sonuc = $sayi1 / $sayi2;
    echo  "$sayi1 / $sayi2 = $sonuc";



    echo "<h5>Çarpma işlemi</h5>";
    $sayi1 = 10;
    $sayi2 = 20;

    $sonuc = '$sayi1 * $sayi2 =' . ($sayi1 * $sayi2);
    echo "<br>";
    echo "$sayi1 * $sayi2 =" . ($sayi1 * $sayi2);
    echo "<br>";
    $sonuc = $sayi1 * $sayi2;
    echo  "$sayi1 * $sayi2 = $sonuc";



    echo "<h5>Üst Alma İşlmei(pow)</h5>";
    $x = 3;
    $y = 2;
    echo "$x<sup>$y</sup>=" . pow($x, $y);

    echo "<br> Değişken tipi: $y >>>" . gettype($y) ."<br>";



    echo "<h5>Karekök Alma İşlmei(sqrt)</h5>";
    $x=25;
    $karekok=sqrt($x);
    echo "$x'in karekökü $karekok.";

    echo "<h5>Mutlak Değer Alma İşlmei(asd)</h5>";
    $x=(-4);
    $mutlak=abs($x);
    echo "|$x|'in mutlak Değeri $mutlak.";



    echo "<h5>Taban Değişim İşlemi(base_convert(x,taban1,taban2))</h5>";
    echo "27 sayısının 2'lik tabandaki karşılığı:" . base_convert(27,10, 2);
    echo "<br>";
    $sayi=30;
    $taban=10;
    $yenitaban =2;
    $sonuc=base_convert($sayi,$taban,$yenitaban);
    echo "($sayi)<sub>$taban</sub> : ($sonuc)<sub>$yenitaban</sub>";


    echo "<h5>Mod İşlemi(fmod(x,y))</h5>";
    $x=20;
    $y=4;
    $mod=fmod($x, $y,);
    echo "$x mod $y = $mod";


    echo "<br> $x sayısı: " . ((fmod($x,2)== 0)? "Çifttir." : "Tektir");


    echo "<h5>Yuvarlama İşlemi(round(x,y))</h5>";
    $x=15.315;
    $y=15.385;
    echo "$x bir Ondalık Basamak Yuvarlanması: " . round ($x, 1);
    echo "$y bir Ondalık Basamak Yuvarlanması: " . round ($y, 2);
    echo "$x bir Ondalık Basamak Yuvarlanması: " . round ($x, 1);
    echo "$y bir Ondalık Basamak Yuvarlanması: " . round ($y, 2);


    echo "<h5>Yuvarlama İşlemi(round(x,y))</h5>";
    /* Her zaman en yakın küçük tam sayı değerine yuvarlama işlemi yapar. */
$x = 15.315;
echo "$x : " . floor($x);

echo "<h5>Yuvarlama İşlemi(round(x,y))</h5>";
    /* Her zaman en yakın büyük tam sayı değerine yuvarlama işlemi yapar. */
    $x = 15.315;
    echo "$x : " . ceil($x);  


    echo "<Rastgele Sayı Üretme (rand))</h5>";
    echo "10-100 arasında rastgele değer: " . rand(10,100);

    for ($i = 0; $i < 10; $i++ ) {
        echo "<br>$i Eleman:  " . rand(10,100);
    }
