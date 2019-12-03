<?php
session_start();
$submit = $_POST['submit'];
$nilaiCaptcha = $_POST['nilaiCaptcha'];

if (isset($submit)) {
  if (empty($nilaiCaptcha)) {
    echo "<script>window.alert('Jawaban tidak boleh kosong'); window.location=('Captcha_image.php');</script>";
  }else{

    if($_SESSION['captcha'] == $nilaiCaptcha){
      header('location:halaman_utama.php');
    }else{
      echo "<script>window.alert('Jawaban anda salah'); window.location=('Captcha_image.php');</script>";
    }
  }
}

 ?>
