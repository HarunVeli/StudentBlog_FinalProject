<?php
include("../Php/veribaglanti.php");

if(isset($_POST['kkadi'], $_POST['kemail'], $_POST['ksifre'])){

	$adsoyad = $_POST['kkadi'];
	$email = $_POST['kemail'];
	$sifre = $_POST['ksifre'];


	$sqlQuery = $baglan->prepare("SELECT id, Name, Email, Password FROM kullanicilar WHERE Email=:m AND IsActive = 1");
	$sqlQuery->execute(['m'=>$_POST['kemail']]);

	$user = $sqlQuery->fetch(PDO::FETCH_ASSOC);

	if ($user)
	{
		echo "<script>alert('Aynı mail adresine sahip kullanıcı bulunmaktadır.');window.location='../Html/girisyap.php'</script>";
	}
	else{
		$ekle = "INSERT INTO kullanicilar(Name, Email, Password, IsActive) VALUES ('".$adsoyad."'
	, '".$email."'
	, '".$sifre."' 
	, 1)";

	if($baglan->query($ekle) == TRUE){
		
		session_start();
		$_SESSION['Name'] = $adsoyad;
		$_SESSION['Email'] = $sifre;

		Header("Location: ../Html/anasayfa.php");
		exit;
	}
	/*else{
		echo "<script>alert('Kaydınız yapılamadı.')</script>";
	}*/

	}
	
}/*
else{
	echo "<script>alert('Lütfen boş yer bırakmayın.')</script>";
}*/

?>