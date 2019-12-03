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
</head>
	<div class="badan">	
 
	<?php
session_start();
 ?>
  <title>Captcha Gambar</title>
  <style>
    .wrapper{
      display:block;
      width: 400px;
      margin: 0 auto;
    }
  </style>
 </head>
 <body align="center">
   <?php
    include_once "image.php";
    create_image();
    ?>
    <div class="wrapper">
      <form action="proses.php" method="post">
        <h2>Image-Based CAPTCHA</h2>
        <p><img src="image.png"></p>
        <input type="text" name="nilaiCaptcha" >
        <input type="submit" name="submit" value="SUBMIT">
      </form>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <input type="submit" value="RESET">
      </form>

    </div>

 </body>
</html>
