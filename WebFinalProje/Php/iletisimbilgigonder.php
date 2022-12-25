<?php
include("../Php/veribaglanti.php");


if(isset($_POST['isim'], $_POST['tel'], $_POST['email'], $_POST['konu'], $_POST['mesaj'])){

	$adsoyad = $_POST['isim'];
	$telefon = $_POST['tel'];
	$email = $_POST['email'];
	$konu = $_POST['konu'];
	$mesaj = $_POST['mesaj'];
	/*kullanıcının usercodeu çekilecek*/

	$ekle = "INSERT INTO iletisim(Name, PhoneNumber, Email, Subject, Message, UserCode) VALUES ('".$adsoyad."'
	, '".$telefon."'
	, '".$email."'
	, '".$konu."' 
	,'".$mesaj."'
	, 1)";

	if($baglan->query($ekle) == TRUE){
		Header("Location: ../Html/iletisim.php");
	}
	else{
		echo "<script>alert('Mesajınız gönderilemedi.');window.location='../Html/iletisim.php'</script>";
	}


}
/*else{
	echo "<script>alert('Lütfen boş yer bırakmayın.')</script>";
}*/


?>
