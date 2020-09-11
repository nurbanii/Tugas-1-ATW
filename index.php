<?php

echo "Animal <br>";
echo  "<hr";

class Kucing{
	public $Nama, $Jumlah_Kaki, $Bisa_Terbang, $Suara;
} 
$Kucing = new Kucing;
$Kucing->Nama = "Hecy";
$Kucing->Jumlah_Kaki = "4";
$Kucing->Bisa_Terbang = "Tidak";
$Kucing->Suara = "Meoong Meoong";

echo "Kucing <br>";
echo "Nama : $Kucing->Nama <br>";
echo "Jumlah_Kaki : $Kucing->Jumlah_Kaki <br>";
echo "Bisa_Terbang : $Kucing->Bisa_Terbang <br>";
echo "Suara : $Kucing->Suara <br>";\
echo "<hr>";

class Anjing{
	public $Nama, $Jumlah_Kaki, $Bisa_Terbang, $Suara;
} 
$Anjing = new Kucing;
$Anjing->Nama = "Mety";
$Anjing->Jumlah_Kaki = "4";
$Anjing->Bisa_Terbang = "Tidak";
$Anjing->Suara = "Guk Guk";

echo "Anjing <br>";
echo "Nama : $Anjing->Nama <br>";
echo "Jumlah_Kaki : $Anjing->Jumlah_Kaki <br>";
echo "Bisa_Terbang : $Anjing->Bisa_Terbang <br>";
echo "Suara : $Anjing->Suara <br>";\
echo "<hr>";
