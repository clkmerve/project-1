<?php

$vt_sunucu="localhost";//veritabanı sunucusunu belirtiyoruz.vt:veritabanı 
$vt_kullanici="root";//veritabanı kullanıcım
$vt_sifre="";
$vt_adi="projeweb";//veritabanı ismi yazılmalı.

//bağlantımı ilgilendiren komutlar
$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);


//bağlantı durumları
if(!$baglan){
    die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error());

}

  //!!!!!sayfaya bağlantının başarılı olduğunu yazdırmamıza gerek yok 
  // bu yüzden else satırını kapatıyoruz 
  //bağlantı olmama durumunda  bize haber vericek if i bırakıyoruz.
    /*else{
    echo "Bağlantı başarılı";//mesaj verme echo ile olur
    }*/



?>