<?php

session_start();

include("../Php/veribaglanti.php");


if(isset($_SESSION['Name'])){

	$yorum = $_POST['yorum'];
	$kadi = $_SESSION['Name'];
	$mail = $_SESSION['Email'];
	$aid = $_GET['degisken'];

	$ekle = "INSERT INTO yorumlar(Comment, UserName, UserMail, ArticleId) VALUES ('".$yorum."'
		,'".$kadi."'
		,'".$mail."'
		,'".$aid."')";

	if($baglan->query($ekle) == TRUE){
	Header("Location: ../Html/makaleler.php");
	}
	else{
		echo "<script>alert('Yorum eklenemedi.');window.location='../Html/makaleler.php'</script>";
	}
}

else{
	$yorum = $_POST['yorum'];
	$kadi = "Ziyaretçi";
	$mail = '';
	$aid = $_GET['degisken'];

	$ekle = "INSERT INTO yorumlar(Comment, UserName, UserMail, ArticleId) VALUES ('".$yorum."'
		,'".$kadi."'
		,'".$mail."'
		,'".$aid."')";

	if($baglan->query($ekle) == TRUE){
		Header("Location: ../Html/makaleler.php");
	}
	else{
		echo "<script>alert('Yorum eklenemedi.');window.location='../Html/makaleler.php'</script>";
	}
}

?>