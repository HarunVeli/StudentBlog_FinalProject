<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<style>
		#dersler {
		  font-family: Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 40%;
		}

		#dersler td, #dersler th {
		  border: 1px solid #ddd;
		  padding: 8px;
		  text-align: center;
		}

		#dersler tr:nth-child(even){background-color: #f2f2f2;}

		#dersler tr:hover {background-color: #ddd;}

		#dersler th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: center;
		  background-color: #59C1BD;
		  color: white;
		}

		.tablo{
			margin-top: 20px;
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

		.input{
		background-color: #fff;
		border: none;
		border-radius: 20px;
		padding: 0.9rem 0.9rem;
		margin: 0.5rem 0;
		width: 100%;
		background-color: #e9e9e9;
		margin-top: 40px;
		display: flex;
		flex-direction: column;
		text-align: center;
		width: 20%;
		}
	</style>
	<meta charset="utf-8">
	<title>Dersler</title>

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


	<section id="Derslertablo">
		<div class="derstablo">
			<center>
				<table id="dersler" class="tablo">
				  <tr>
				    <th>Ders Id</th>
				    <th>Ders Adı</th>
				  </tr>
				  <?php
					include("../Php/veribaglantidersler.php");

					$select = "SELECT * FROM dersler";
					$sonuc = $baglan->query($select);

					if($sonuc->num_rows > 0){
						while($cek=$sonuc->fetch_assoc()){
							echo "
								<tr>
								    <td>".$cek['id']."</td>
								    <td>".$cek['lessonName']."</td>
							  	</tr>
							";
						}
					}
					else{
						echo "<script>alert('Kayıtlı ders bulunamadı.')</script>";
					}
					?>
				</table>
			</center>
		</div>
	</section>


	<?php if (isset($_SESSION['Name'])){?>
		<center>
		<form action="../Php/dersekle.php" method="post">
				<input required type="text" placeholder="Ders Adı" class="input" name="ders">
				<button class="btn1">Ders Ekle</button>
			</form>
		</center>
		<?php } ?>
	

</body>
</html>

