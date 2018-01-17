<?php

include "Sehir.class.php";
 

$sehir = new Sehir();

// Şehir Listesi (array)

print_r($sehir->getSehirListesi());


print_r(Sehir::getSehirListesi()); // static Method


// Tek Bir Şehir Alma (String) 
echo($sehir->getSehir(25));


echo(Sehir::getSehir(25)); // static Method

// Şehire Ait İlçe Listesi (array)

print_r($sehir->getIlceListesi(25));


print_r(Sehir::getIlceListesi(25)); // static Method


// plaka ve İlçe ID ye göre ilçe getir (String)

echo($sehir->getIlce(25,5));


echo(Sehir::getIlce(25,5)); // static Method