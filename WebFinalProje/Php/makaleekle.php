<?php
session_start();

include("../Php/veribaglanti.php");


if(isset($_POST['baslik'])){

	$baslik = $_POST['baslik'];
	$konu = $_POST['konu'];
	$makale = $_POST['makale'];
	$kullanici = $_SESSION['Name'];
	$mail = $_SESSION['Email'];

	$ekle = "INSERT INTO makaleler(Title, Subject, Article, UserName, UserMail) VALUES ('".$baslik."'
		,'".$konu."'
		,'".$makale."'
		,'".$kullanici."'
		,'".$mail."')";

	if($baglan->query($ekle) == TRUE){
		Header("Location: ../Html/makaleler.php");
	}
	else{
		echo "<script>alert('Ders eklenemedi.');window.location='../Html/makaleler.php'</script>";
	}
}

?>