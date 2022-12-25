<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, intial-scale=1.0">
	<title>Giriş Yap</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../Css/girisyap.css">
	<link rel="stylesheet" type="text/css" href="../Css/menu.css">
</head>
<body>
	<div class="header">
		<div class="container">
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
			
			<div class="vertical__align">
				<center>
					<div class="container1 right-panel-active">
							<div class="container1__form container1--signup">
								<form action="../Php/kayitbilgigonder.php" method="post" class="form" id="form1">
									<h2 class="form__title">Kayıt Ol</h2>
									<input required type="text" placeholder="Kullanıcı Adı" class="input" name="kkadi">
									<input required type="email" placeholder="E-Posta" class="input" name="kemail">
									<input required type="password" placeholder="Şifre" class="input" name="ksifre">
									<button class="btn1">Kayıt Ol</button>
								</form>
							</div>

							<div class="container1__form container1--signin">
								<form action="../Php/girisbilgigonder.php" method="post" class="form" id="form2">
									<h2 class="form__title">Giriş Yap</h2>
									<input required type="email" placeholder="E-Posta" class="input" name="gemail">
									<input required type="password" placeholder="Şifre" class="input" name="gsifre">
									<button class="btn1">Giriş Yap</button>
								</form>
							</div>

						<div class="container1__overlay">
							<div class="overlay">
								<div class="overlay__panel overlay--left">
									<button class="btn1" id="signIn">Giriş Yap</button>
								</div>
								<div class="overlay__panel overlay--right">
									<button class="btn1" id="signUp">Kayıt Ol</button>
								</div>
							</div>
						</div>
					</div>
				</center>
			</div>
			<center>
				<?php if (isset($_SESSION['Name'])){?>
					<form action="../Php/cikisyap.php" method="post">
				<button class="btn1">Çıkış Yap</button>
				</form>
				<?php } ?>
			</center>

		</div>
	</div>
</body>
<script>
	const signInBtn = document.getElementById("signIn");
	const signUpBtn = document.getElementById("signUp");
	const firstForm = document.getElementById("form1");
	const secondForm = document.getElementById("form2");
	const container = document.querySelector(".container1");

	signInBtn.addEventListener("click", () => {
		container.classList.remove("right-panel-active");
	});
	signUpBtn.addEventListener("click", () => {
		container.classList.add("right-panel-active");
	});
</script>
</html>