<?php 

$veritabani = "localhost";
$kullanici = "root";
$sifre = "00000000";
$veritabaniIsim = "ogrblog";

$baglan = mysqli_connect($veritabani, $kullanici, $sifre, $veritabaniIsim);/*new PDO("mysql:host=localhost; port=3307; dbname=ogrblog", "root", "");*/
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

