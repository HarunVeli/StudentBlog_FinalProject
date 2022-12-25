<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Makaleler</title>

	<script src="https://kit.fontawesome.com/7ffd76f83e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../Css/menu.css">
	<link rel="stylesheet" type="text/css" href="../Css/makale.css">

	<link rel="stylesheet" href="../Owl/owl.carousel.min.css">
	<link rel="stylesheet" href="../Owl/owl.theme.default.min.css">
<style>
	#makaleekle{
	text-align: center;
}

.ekleform{
	width: 30%;
}

#iletisimOpacty{
	background-color: rgba(255, 255, 255, 0.2);
	padding: 30px 60px;
	border-radius: 9px;
	
	margin-right: 25%;
	margin-left: 25%;
	height: 400px;
}

.form-control{
	width: 100%;
	padding: 10px;
	font-size: 15px;
	line-height: 1.5;
	background-color: white;
	margin: 10px;
	border-radius: 9px;
	border: 2px solid black;
}

#makaleekle{
	background: url("../Resim/iletisim.jpg");
	background-size: cover;
	padding: 50px;
	height: auto;
	text-align: center;
	height: 800px;
	margin-top: 50px;
}

.btn1{
		/*background-color: var(--blue);*/
		/*background-image: linear-gradient(90deg, var(--blue) 0%, var(--lightblue) 74%);*/
		background-color: #59C1BD;
		color: white;
		border-radius: 20px;
		border: none;
		cursor: pointer;
		font-size: 0.8rem;
		font-weight: bold;
		letter-spacing: 0.1rem;
		padding: 0.9rem 4rem;
		text-transform: uppercase;
		transition: transform 80ms ease-in;
		margin-top: 10px;
		}
		.btn1:active{
			transform: scale(0.95);
		}

		.btn1:focus{
			outline: none;
		}

		.btn1:hover{
			background-color: white;
			border-style: solid;
			color: #59C1BD;
		}
</style>

	
</head>

<body>

	<section id = "menu">
			<div class="container" >
			<!--<div id = "menuLogo">AnaSayfa</div>-->
				<nav align="center">
					<ul>
						<li><a href="../Html/anasayfa.php"><i class="fa-solid fa-house-chimney"></i>Ana Sayfa</a></li>
						<li><a href="../Html/dersler.php"><i class="fa-solid fa-person-chalkboard"></i>Dersler</a></li>
						<li><a href="../Html/makaleler.php"><i class="fa-solid fa-newspaper"></i>Makaleler</a></li>
						<li><a href="../Html/anasayfa.php"><i class="fa-solid fa-info"></i>Hakkımızda</a></li>
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

		<section id="makaleler">
			<div class="makalecontainer">
					<h3>Makaleler</h3>
				<div class="owl-carousel owl-theme">

					<?php
					include("../Php/veribaglantidersler.php");

					$select = "SELECT * FROM makaleler ORDER BY 1 DESC";
					$sonuc = $baglan->query($select);

					if($sonuc->num_rows > 0){
						while($cek=$sonuc->fetch_assoc()){

							echo "
								<div class=card item data-merge=1.5>
									<img src=../Resim/makale.jpg class=.img-fluid>
									<h5 class=cardbaslik>".$cek['Title']."</h5>
									<p class=cardp>".$cek['Subject']."</p>
									<a href=../Html/makaledetay.php?degisken=".$cek['id']." class=cardbaslik>Detay</a>
								</div>
							";
						}
					}
					else{
						echo "<script>alert('Kayıtlı ders bulunamadı.')</script>";
					}
					?>
				</div>
			</div>
		</section>

		<?php if (isset($_SESSION['Name'])){?>
			<section id="makaleekle">
				<h3 id="h3iletişim">Makale Ekle</h3>
				<form action="..\Php\makaleekle.php" method="post">
				<div id="iletisimOpacty">
								<div id="ekleform">
									<input type="text" name="baslik" placeholder="Başlık" required class="form-control">
									<input type="text" name="konu" placeholder="Konu" required class="form-control">

								<textarea name="makale" id="textarea"
								placeholder="Makale" rows="3" required class="form-control"></textarea>
								<button class="btn1">Makale Ekle</button>
								</div>
						</div>
						</form>
			</section>
		<?php } ?>

<script
  src="https://code.jquery.com/jquery-3.6.2.slim.min.js"
  integrity="sha256-E3P3OaTZH+HlEM7f1gdAT3lHAn4nWBZXuYe89DFg2d0="
  crossorigin="anonymous"></script>
<script src="../Owl/owl.carousel.min.js"></script>
<script src="../Js/owlscript.js"></script>

</body>
</html>