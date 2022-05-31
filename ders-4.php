<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-4</title>
</head>

<body>

    <h3>Php'de Diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir.(int, string, double, obje) (1,2,3,"Ali","Ahmet","125,20") </li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversion hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direk yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül(,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>

    <?php
    $dizi1 = array(1,2,3,4, "kemal","arıca", 130.5);
    $dizi2 = [1,2,3,4, "kemal","arıca", 130.5];
    
    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";
    
    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";
    
    
    
    echo "Dizinin 5.elemanı: $dizi1[5]";
    echo "<br>Dizinin 1. Elemanı:" . gettype($dizi1[1]);
    
    echo "Dizinin 0.elemanı: $dizi1[0]";
    echo "Dizinin 1.elemanı: $dizi1[1]";
    echo "Dizinin 2.elemanı: $dizi1[2]";
    echo "Dizinin 3.elemanı: $dizi1[3]";
    echo "Dizinin 4.elemanı: $dizi1[4]";
    echo "Dizinin 5.elemanı: $dizi1[5]";
    echo "Dizinin 6.elemanı: $dizi1[6]";


echo "<h3> Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması</h3>";

foreach($dizi1 as $item) {
    echo $item . "<br>";
}

echo "<h3> Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-2</h3>";

foreach($dizi1 as $key => $value) {
    echo "$key - $value  <br>";
}

echo "<h3> Dizinin İçeriğinin For Döngüsü ile Yazdırılması</h3>";

for ($i = 0; $i < count($dizi1); $i++) {
    echo $dizi1[$i] . "<br>";
}

$sayilar = array(
    array(1,3,5,7,9),
    array(2,4,6,8,10)
);

echo "<pre>";
print_r($sayilar);
echo "</pre>";


echo "Sayılar Dizisinin İçerisindeki 2.Dizinin 3 İndisli Elemanı: " . $sayilar[1][3];

echo "Sayılar Dizisinin İçerisindeki 1.Dizinin 4 İndisli Elemanı: " . $sayilar[0][4];





echo "<br>*****************************<br>";




    $sayilar = array(
        "Integer"   => array(55, 23, 15, 24),
        "Double"    => array(13.5, 2.5, 1.36)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "Sayılar Dizisinin İçerisindeki 1. Dizinin 1 İndilisi Elemanı: " . $sayilar["Integer"][1] . "<br>";
    echo "Sayılar Dizisinin İçerisindeki 1. Dizinin 2 İndilisi Elemanı: " . $sayilar["Double"][2] . "<br>";

    $bilgiler = array(
        "id"     => "0",
        "adi"    => "Neslihan",
        "soyadi" => "Gülmez",
        "gsm"    => "555 666 55 44",
        "yas"    => 32
    );
    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";

    echo "$bilgiler[adi] $bilgiler[soyadi] hoşgeldiniz.";

    $kullanicilar = array(
        "kullanici1"    => array(
            "id"     => "0",
            "adi"    => "Neslihan",
            "soyadi" => "Gülmez",
            "gsm"    => "555 666 55 44",
            "yas"    => 32
        ),
        "kullanici2"    => array(
            "id"     => "1",
            "adi"    => "Ahmet",
            "soyadi" => "Keskin",
            "gsm"    => "555 666 55 44",
            "yas"    => 32
        )
    );

    echo "<pre>";
    print_r($kullanicilar);
    echo "</pre>";



    echo "<br><br><br><br><br><br><br><br><br><br>";

    $bilgiler = array(
        "tel"       => "+905342036807",
    );
    $bilgi = str_split($bilgiler["tel"],3);
    foreach ($bilgi as $value) {
        echo $value . " ";
    }


    echo "<br><br><br><br>";

   
    $test = '+905342036807';
echo wordwrap($test, 3, '  ', TRUE);

    ?>









</body>

</html>
