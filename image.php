<?php
function create_image(){

  $image = imagecreatetruecolor(150, 50);
  $color = imagecolorallocate($image, 255, 255, 255);
  imagefilledrectangle($image, 0, 0, 400, 50, $color);


  $color_line = imagecolorallocate($image, 0, 0, 0);

  // membuat garis pada gambar
  for($i=0; $i<4; $i++){
    imageline($image, 0, rand()%50, 150, rand()%50, $color_line);
  }

  // membuat titik titik pada gambar
  for($i=0; $i<800; $i++){
    imagesetpixel($image, rand()%150, rand()%50, $color_line);
  }

// membuat abjad di dalam gambar
$abjad = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
$len = strlen($abjad);
$abjads = $abjad[rand(0, $len-1)];

$kata = "";
for($i=0; $i<5; $i++){
  $abjads = $abjad[rand(0, $len-1)];
  imagestring($image, 5, 5+($i*30), 20, $abjads, $color_line); //mengatur jarak, tinggi teks
  $kata .= $abjads;
}
$_SESSION['captcha'] = $kata;

  imagepng($image, "image.png");

}
 ?>
