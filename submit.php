<?php
// panggil script class
include 'class-captcha.php';
// membuat obyek class
$captcha1 = new mathcaptcha();

// jika kode hasil perhitungan dari session sama dengan kode 
// yang dimasukkan user, maka kode captcha cocok
if ($captcha1->resultcaptcha() == $_POST['kode'])
{
    echo "<p align=center><b>Jawaban CAPTCHA benar</b></p>";
    echo "<p align=center>Berikut ini data yang Anda masukkan ke dalam form</p>";
    echo "<p align=center>Nama : ".$_POST['nama']."</p>";
    echo "<p align=center>Email : ".$_POST['email']."</p>";
    echo "<p align=center><a href='Captcha_text.php'>Kembali</a></p>";

}
else
{
    // jika kode captcha salah
    echo "<script>window.alert('Jawaban anda salah'); window.location=('Captcha_text.php');</script>";
}
 
?>

