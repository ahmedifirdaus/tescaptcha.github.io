<html>
<head>
	<title>Perbandingan Text-Based CAPTCHA dengan Image-Based CAPTCHA</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">Perbandingan Text-Based CAPTCHA dengan Image-Based CAPTCHA</h1>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">Beranda</a></li>
			<li><a href="Captcha_text.php">Text-Based CAPTCHA</a></li>
			<li><a href="Captcha_image.php">Image-Based CAPTCHA</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'Captcha Text-Based':
				include "Captcha_text.php";
				break;
			case 'Captcha Image-Based':
				include "captcha_image.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>