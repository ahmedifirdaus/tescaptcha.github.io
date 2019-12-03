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
    </div>
</div>
</body>

<?php
    // memanggil script class
    include 'class-captcha.php';
    // membuat obyek class
    $captcha1 = new mathcaptcha();
    // panggil method untuk mengenerate kode
    $captcha1->generatekode(); 
?>
 
<html>
    <head>
       <title>Text-based CAPTCHA</title>
    </head>
    <body align="center">
        <h1>Form Input Data</h1>
        <form method="post" action="submit.php">
            <table align="center">
                <tr><td>Nama</td><td>:</td><td><input type="text" name="nama" required></td></tr>
                <tr><td>Email</td><td>:</td><td><input type="text" name="email" required></td></tr>
            </table>  
             
            <p><b>Jawab Tes Dibawah Ini Dengan Benar</b></p>
            <p>
              <?php 
                   // menampilkan kode captcha berisi soal matematika
                   $captcha1->showcaptcha(); 
              ?>
            <br>
            <input type="text" name="kode" required>
            </p>
            <p><input type="submit" name="submit" value="Submit"></p>
             
        </form>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <input type="submit" value="RESET">
      </form>
    </body>
</html>
</html>