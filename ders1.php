<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web teknolojileri ve programlama</title>
</head>
<body>
    
    
<!-- Shift+alt+a -->
    <?php
    /* 
    
    Kullanılan komutlar
    echo: Ekrana yazdırma işlemi yapar.
          İçerisinde html etiketleri kullanılabilir.
          Çift veya Tek Tırnak Kullanılabilir.
          Çift Tırnak içerisinde değişken içerikleri gösterilir.
          Nokta İşareti ile birleştirme yapılabilir.
          \ kaçış karakteridir. Özel ifadelerden önce kullanılır.
    */
    
    echo"<h43>Adnan Menderes Bulvarı</h3>";
    echo"<h4>Adnan Menderes Bulvarı</h4>";
    echo"Bilgisayar Programcılığı" . "Web teknolojileri" . "<br>";
    echo"Bilgisayar Programcılığı" ."<br>". "Web teknolojileri";

    echo "<hr> <h4> Değişken Tanımlama Kuralları <h4>";

    echo "<ol> 
    <li> Değişken isimleri $ ile başlar. </li>
    <li> Değişken isimleri sayısal bir ifade ile başlayamaz. </li>
    <li> Değişken isimlerinde boşluk kullanılmaz. İki kelime varsa örneğin birinci_sinif , birincisinif , birinci-sinif gibi kullanımlar önerilir. </li>
    <li> Değişken ve dosya isimlerinde Türkçe karakter kullaılmamalıdır. </li>
    <li> Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır. \$sayi != \$Sayi </li>
    <li> Değişken içerisinde eğer metinsel biri fade varsa çift tırnak (\") veya tek tırnak (') kulllanılır. </li>
    <li> Değişken içerisinde eğer sayısal bir ifade varsa tırnak kullanılmadan yazılır. </li>
    <li> Değişken ismi değişkenin içeriğini ifade etmeli </li>
    <li> Değişkenler ekrana echo komutu ile yazdırılır. </li>



    </ol>";

    echo "<hr> <h4> Değişken Tanımlama Örnekleri <h4>";

    $isim = "Ahmet";
    $soyisim = "Davut";
    $yas= 34;

    echo $isim ." ". $soyisim;
    echo "<br>";
    echo "$isim $soyisim";

    /* Uygulama:
    üniversite-myo-ad-soyad-numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
    Girilen bu değişkenlerin değerlerini bir html tablo içerisinde gösteriniz. */

    $üniversite = "aydın adnan menderes üniversitesi meslek yüksekokulu";
    $myo        = "Bilgisayar Programcılığı";
    $isim       = "İbrahim Rıfat";
    $soyisim    = "Akgün";
    $numara     = 216001042;


    
    ?>
    <form action="">
        <label for="üniversite">Üniversite</label>
        <input type="text" name="" value="<?php echo $üniversite; ?>" id="üniversite"><br>

        <label for="myo">myo</label>
        <input type="text" name="" value="<?php echo $myo; ?>" id="myo"><br>

        <label for="isim">isim</label>
        <input type="text" name="" value="<?php echo $isim; ?>" id="isim"><br>

        <label for="soyisim">soyisim</label>
        <input type="text" name="" value="<?php echo $soyisim; ?>" id="soyisim"><br>

        <label for="numara">numara</label>
        <input type="text" name="" value="<?php echo $numara; ?>" id="numara"><br>
    
</body>
</html>