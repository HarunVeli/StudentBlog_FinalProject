<?php

include("../Php/veribaglanti.php");


if(isset($_POST['ders'])){

	$ders = $_POST['ders'];

	$ekle = "INSERT INTO dersler(lessonName) VALUES ('".$ders."')";

	if($baglan->query($ekle) == TRUE){
		Header("Location: ../Html/dersler.php");
	}
	else{
		echo "<script>alert('Ders eklenemedi.');window.location='../Html/dersler.php'</script>";
	}
}

?>