<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Makale Detay</title>
	<script src="https://kit.fontawesome.com/7ffd76f83e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../Css/menu.css">

	<style>
		
		.konu{
			margin-left: 20%;
			color: #888;
			font-size: 30px;
		}

		.icerik{
			margin-left: 21%;
			color: black;
			font-size: 20px;
			margin-top: 1%;
		}

		.yorum{

			margin-top: 10%;
		}

		.konuy{
			margin-left: 20%;
			color: #888;
			font-size: 20px;
			margin-top: 5%;
		}

		#iletisimOpacty{
		background-color: #59C1BD;
		opacity: 60%;
		padding: 10px 20px;
		border-radius: 9px;
		
		margin-top: 1%;
		margin-right: 19%;
		margin-left: 19%;
		height: auto;
		}

		.ekleform{
		width: auto;
		}

		.konuc{
			margin-left: 1%;
			color: black;
			font-size: 22px;
			margin-top: 1%;
			text-align: left;
		}

		.yorumlar{
			margin-left: 3%;
			color: black;
			font-size: 18px;
			margin-top: 1%;
			text-align: left;
			margin-bottom: 1%;
		}

		.btn1{
		/*background-color: var(--blue);*/
		/*background-image: linear-gradient(90deg, var(--blue) 0%, var(--lightblue) 74%);*/
		background-color: white;
		color: #59C1BD;
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
			background-color: #59C1BD;
			border-style: solid;
			color: white;
			border-color: white;
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
						<li><a href="../Html/makaleler.php"><i class="fa-solid fa-newspaper"></i>Makaleler</a>
						</li>
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

		<?php
		include("../Php/veribaglantidersler.php");

					$select = "SELECT * FROM makaleler";
					$sonuc = $baglan->query($select);

					if($sonuc->num_rows > 0){
						while($cek=$sonuc->fetch_assoc()){
							if($cek['id'] == $_GET['degisken'])

					echo "
						<div>
							<center><h3>".$cek['Title']."</h3></center>
							<p class=konu>".$cek['Subject']."</p>
							<p class=icerik>".$cek['Article']."</p>
							<p class=konuy>Yazar: ".$cek['UserName']."</p>
						</div>
					";
						}
					}
					else{
						echo "<script>alert('Makale detayı getirilemedi.')</script>";
					}
					
					echo "<div><center><h3 class=yorum>Yorumlar</h3></center></div>";

					$selectc = "SELECT * FROM yorumlar";
					$sonucc = $baglan->query($selectc);

					if($sonucc->num_rows > 0){
						while($cekc=$sonucc->fetch_assoc()){
							if($cekc['ArticleId'] == $_GET['degisken'])

						echo "
							<div id=iletisimOpacty>
								<div class=ekleform>
									<p class=konuc>".$cekc['UserName']."</p>
									<p class=yorumlar>".$cekc['Comment']."</p>
								</div>
						</div>
						";
						}
					}


			?>
		 	<center><h3 class="yorum">Yorum Ekle</h3></center>

				<form action="..\Php\yorumekle.php?degisken=<?php echo $_GET['degisken'];?>" method="post">
					<div style="margin-bottom: 3%;">
						<div id="iletisimOpacty">
								<div id="ekleform">
								<textarea name="yorum" id="textarea"
								placeholder="Yorum" rows="3" required class="form-control"></textarea>
								<center><button class="btn1">Yorum Ekle</button>
								</center>
								</div>
						</div>
				</div>
				</form>

</body>
</html>