<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-3</title>
</head>

<body>

    <?php

    /* Uygulama Ödevi 
        Kuyruk ve Yığın Veri yapılarının php üzerinde dizileri kullanılarak örneklendirmesini gerçekleştiriniz.
        */

    /* Uygulama: Rasgele üretilen sayının 
        50'den büyükse 
            Geçtiniz-Notunuz: xx
        50'den küçükse 
            Kaldınız-Notunuz: xx
        uygulamasını gerçekleştiriniz.
         */

    use function PHPSTORM_META\type;

    $not = rand(10, 100);
    if ($not >= 50) {
        echo "Geçtiniz-Notunuz:$not";
    } else {
        echo "Kaldınız-Notunuz:$not";
    }


    echo "<h3>Sık Kullanılan String Fonksiyonlar</h3>";

    $yazi = "Aydın Adnan Menderes Üniversitesi";
    echo "<br> \$yazi Değişken İçeriği: $yazi (" . gettype($yazi) . ")";

    //İçeriğin Büyük Harfe Dönüştürülmesi

    echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması: " . $buyuk_yazi = strtoupper($yazi);
    echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması: " . $buyuk_yazi = mb_strtoupper($yazi);

    //İçeriğin Küçük Harfe Dönüştürülmesi
    echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = strtolower($buyuk_yazi);
    echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = mb_strtolower($buyuk_yazi);


    //İçeriğin İlk Harfinin, Büyük Harfe Dönüştürülmesi
    echo "<br> \$yazi İlk Harfinin, Büyük Harfle Yazılması: " . $ilk_yazi = ucfirst($kucuk_yazi);

    //İçeriğin Tüm Kelimelerinin İlk Harfinin, Büyük Harfe Dönüştürülmesi
    echo "<br> \$yazi Tüm Kelimelerinin İlk Harfinin, Büyük Harfle Yazılması: " . $kelime = ucwords($kucuk_yazi);

    //İçeriğin Harf Sayısı:
    echo "<br> \$yazi İçerisindeki Harf Sayısı: " . strlen($yazi);

    //Ascii Char Karşılığı
    echo "<br>Karakter Karşılığı: " . chr(109);
    echo "<br>Karakter Karşılığı: " . chr(64);

    // Uygulama 32-127 char karşılıkları:
    echo "<br>Ascii Karakterleri: ";
    for ($i = 32; $i <= 127; $i++) {
        echo "$i: " . chr($i) . " ";
    }


    //Metnin parçalanarak diziye dönüştürülmesi (explode)
    echo "<br><br>";
    echo $yazi . "<br>";
    $dizi = explode(" ", $yazi);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    //Uygulama Paragraftaki Kelime ve Cümle Sayılarını alt alta yazdırınız.

    $metin = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit rerum voluptas odio amet fugiat nam numquam. Soluta fugiat quam perspiciatis, maiores ad non amet inventore officiis quibusdam totam ducimus adipisci.Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum illo, repellendus maxime ut dolores quam esse quas ipsum eveniet quasi. Voluptatem, delectus aliquam praesentium atque quo adipisci illum voluptatibus minus?";

    $kelimeDizisi = explode(" ", $metin);
    $cumleDizisi = explode(".", $metin);

    echo "<br>Kelime Sayısı: " . count($kelimeDizisi);
    echo "<br>";
    echo "Cümle Sayısı: " . count($cumleDizisi);


    /* Uygulama:
        Veri tabanından gelen 2022-11-20 değerini 20-11-2022 şeklinde ekrana yazdırınız.
    */


    echo "<br><br>";
    $tarih = "2022-11-20";
    $tarihdizisi = explode("-", $tarih);
    echo $tarihdizisi[2] . "-" . $tarihdizisi[1] . "-" . $tarihdizisi[0];


    //Dizinin metne dönüştürülmesi (implode)


    echo "<br>";
    $aylarDizisi = array(
        "Ocak",
        "Şubat",
        "Mart",
        "Nisan",
        "Mayıs"
    );
    echo "<pre>";
    print_r($aylarDizisi);
    echo "</pre>";

    $aylarString = implode(" - ", $aylarDizisi);
    echo "<br>String: $aylarString";

    /*
        str_split():
    Verilen bir metnin belirten sayı kadar ayrılarak bir dizi içeriğine aktarılması. Eğer sayı belirtilmezse metni harf harf böler. 
     */


    echo "<br>";
    echo "<br>";
    $iban = "TR0010002000300040005000";
    $Yeniiban = str_split($iban, 4);
    echo "<pre>";
    print_r($Yeniiban);
    echo "</pre>";

    echo "İmplode IBan: " . implode("-", $Yeniiban);


    echo "<br> For Iban =";
    foreach ($Yeniiban as $parca) {
        echo "$parca ";
    }

    echo "<br>";

    echo "<br> For Iban =";
    for($i = 0; $i <= count($Yeniiban); $i++){
        echo $Yeniiban[0] . " ";
    }

    /*  Trim - Substr - str_replace - md5 - sha1*/




    ?>









</body>

</html>
