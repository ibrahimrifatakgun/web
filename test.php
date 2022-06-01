<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

    $connect = new mysqli($servername,$username,$password,$dbname);

        if($connect->connect_error) {
            die ("Bağlantı hatası oluştu.");
        }   
            $name = $_POST["isim"];
            $name = $_POST["soy_isim"];
            $mail = $_POST["email"];
            $name = $_POST["tel_no"];
            $name = $_POST["cinsiyet"];
            $name = $_POST["ders"];
            $name = $_POST["not"];
            $name = $_POST["konu"];
            $name = $_POST["mesaj"];
            $ekle = "insert into iletisim(isim, soy_isim, email, tel_no, cinsiyet, ders, not, konu, mesaj) values('$name''$mail')";
                if ($connect->query($ekle)) {
                    echo "Kayıt yapıldı";
                }
                else {
                    echo "Kayıt yapılamadı";
                    }



?>