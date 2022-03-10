<!DOCTYPE html>
<html>
<head>
      <title>Selamat Datang</title>
      <!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
-->
<div class="content">
	<header>
		<h1 class="judul">Mie Ayam Disini Harga 5 Ribu</h1>
		<h3 class="deskripsi">Silahkan Dipesan</h3>
		<h3 class="deskripsi">Menu Makanan=</h3>
	</header>
<div class="content">
	<div class="menu">
		<ul>
			<li><a href="index.php?page=MieAyamBiasa">Mie Ayam Biasa = RP.5000</a></li>
			<li><a href="index.php?page=MieAyamBakso">Mie Ayam Bakso = RP.7000</a></li>
			<li><a href="index.php?page=MieYamin">Mie Yamin = RP.8500</a></li>
			<li><a href="index.php?page=SotoMie">Soto Mie = RP.7000</a></li>
		</ul>
	</div>
 
	<div class="badan">
	<?php    
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'Mie Ayam':
				include "Makanan/MieAyam.php";
				break;
			case 'Mie Ayam Bakso':
				include "Makanan/MieAyamBakso.php";
				break;
			case 'Mie Yamin':
				include "Makanan/MieYamin.php";
				break;	
			case 'Soto Mie';
				include "Makanan/SotoMie.php";
				break;				
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>
