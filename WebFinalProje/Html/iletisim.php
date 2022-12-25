<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>İletişim</title>
	<script src="https://kit.fontawesome.com/7ffd76f83e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../Css/menu.css">

	<style>
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

		<section id="iletisim">
			<div class="containerHakkimizda">
					<h3 id="h3iletişim">İletişim</h3>
				<form action="../Php/iletisimbilgigonder.php" method="post">
					<div id="iletisimOpacty">
						<div id="formGrup">
							<div id="solform">
								<input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
								<input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
							</div>
							<div id="sagform">
								<input type="text" name="email" placeholder="Email Adresi" required class="form-control">
								<input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
							</div>

								<textarea style="margin-left:31px;" name="mesaj" id="textarea" cols="20"
							placeholder="Mesaj" rows="3" required class="form-control"></textarea>
							

							<button class="btn1">Gönder</button>
						</div>
					</div>
				</form>
				<footer>
					<div id="copyright" class="h5sol">2022 | Tüm Hakları Saklıdır
					</div>
					<div id="socialfooter">
						<a href="https://www.instagram.com" class="fa-brands fa-instagram social"></a>
						<a href="https://tr-tr.facebook.com" class="fa-brands fa-facebook social"></a>
						<a href="https://twitter.com" class="fa-brands fa-twitter social"></a>
					</div>
				</footer>
			</div>
		</section>




</body>
</html>