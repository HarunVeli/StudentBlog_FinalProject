<?php 

$veritabani = "localhost";
$kullanici = "root";
$sifre = "00000000";
$veritabaniIsim = "ogrblog";

$baglan = new PDO("mysql:host=localhost; dbname=ogrblog", "root", "00000000");/*mysqli_connect($veritabani, $kullanici, $sifre, $veritabaniIsim, 3307);*/
/*portu 3307 kullandığın zaman şifreye gerek yok ama stock konumda şifre->8 tane 0*/

if(!$baglan){

	die("Veritabanı bağlantısı başarısız".mysqli_connect_error());

}

 /*try{
$dbConnection = new PDO("mysql:host=localhost; dbname=hvtblog;", "root", "00000000");
echo "Baglanti başarılı!";

}
catch (Exception $e)
{
	echo $e->getMessage();
	$dbConnection = null;
}*/
 ?>

