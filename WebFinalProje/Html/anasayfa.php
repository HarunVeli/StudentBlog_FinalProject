<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ana Sayfa</title>

	<script src="https://kit.fontawesome.com/7ffd76f83e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../Css/menu.css">
</head>
<body>
		<section id = "menu">
			<div class="container" >
			<!--<div id = "menuLogo">AnaSayfa</div>-->
				<nav align="center">
					<ul>
						<li><a href="../Html/anasayfa.php"><i class="fa-solid fa-house-chimney"></i>Ana Sayfa</a></li>
						<li><a href="../Html/dersler.php"><i class="fa-solid fa-person-chalkboard"></i>Dersler</a></li>
						<li><a href="../Html/makaleler.php"><i class="fa-solid fa-newspaper"></i>Makaleler</a>
						</li>
						<li><a href="#hakkimizda"><i class="fa-solid fa-info"></i>Hakkımızda</a></li>
						<li><a href="../Html/iletisim.php"><i class="fa-solid fa-tower-broadcast"></i>İletişim</a></li>
						<?php if (isset($_SESSION['Name'])){?>
						<li><a href="../Php/cikisyap.php"><i class="fa-solid fa-right-to-bracket"></i>Çıkış Yap</a></li>
						<?php } else{?>
						<li><a href="../Html/girisyap.php"><i class="fa-solid fa-right-to-bracket"></i>Giriş Yap</a></li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</section>

		<section id="anasayfa">
			<div id="black"></div>

			<div id="icerik">
				<h2>HOŞGELDİNİZ</h2>
				<hr width="300" align="left">
				<p>Yenilenen arayüzüyle Hvt Öğrenci Blogu kullanımınıza hazır. Yeni deneyimler elde etmek için sayfayı keşfetmeye başlayabilirsiniz.</p>
			</div>
		</section>

		<section id="hakkimizda">
			<h3>HAKKIMIZDA</h3>
			<div id="containerHakkimizda">
				<div id="sol">
					<h5 id="h5sol">Blog sayfamızda siz değerli öğrencilerin
					 ihtiyaç duyduğu her şeyi bir araya 
					 getiriyor,
					 hizmetinize sunuyoruz.</h5>
				</div>

				<div id="sag">
					<span>Ö</span>
					<p id="psag">
						ğrencilik hayatınızda ihtiyaç duyduğunuz işleri bir araya topladık.
						Ders işlemlerinizi kolayca halledebilirsiniz.Makaleler paylaşabilir 
						daha önceden paylaşılan makalelere yorum yapabilirsiniz.
					</p>
				</div>

				<img src="../Resim/hakkimizda.jpg" alt="" class="img-fluid mt100">

				<p id="pson">Menülerde bulunan işlemler sayesinde üye olarak kolayca ders, makale ekleyebilirsiniz. Daha önceden yapılmış olan makalelere yorum yapabilirsiniz.</p>
			</div>
		</section>
			
		
</body>
</html>


<?php

include("../Php/veribaglanti.php");

?>