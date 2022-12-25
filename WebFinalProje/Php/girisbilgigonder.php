<?php
include("../Php/veribaglanti.php");


if(isset($_POST['gemail'], $_POST['gsifre'])){

	$sqlQuery = $baglan->prepare("SELECT id, Name, Email, Password FROM kullanicilar WHERE Email=:m AND Password=:p AND IsActive = 1");
	$sqlQuery->execute(['m'=>$_POST['gemail'], 'p'=>$_POST['gsifre']]);

	$user = $sqlQuery->fetch(PDO::FETCH_ASSOC);

	if ($user)
	{
		session_start();
		$_SESSION['id'] = $user['id'];
		$_SESSION['Name'] = $user['Name'];
		$_SESSION['Email'] = $user['Email'];
		//$_SESSION['Email'] = $user['Email'];
		//$_SESSION['Password'] = $user['Password'];


		Header("Location: ../Html/anasayfa.php");
		exit;
	}
	/*else
	{
		echo "<script>alert('Böyle bir kullanıcı yoktur.')</script>";
	}*/


}
/*else{
	echo "<script>alert('Lütfen boş yer bırakmayın.')</script>";
}*/


?>