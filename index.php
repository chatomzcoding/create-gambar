<?php
	$output = "textimage.jpg";// lokasi gambar disimpan
	$x = 720;
	$y = 480;
	$gambar = imagecreate($x, $y);// buat lebar dan tinggi gambar
	//warna
	$purple = imagecolorallocate($gambar, 102, 65, 149);
	$grey = imagecolorallocate($gambar, 128, 128, 128);
	$black = imagecolorallocate($gambar, 0, 0, 0);// ganti warna background gambar
	$white = imagecolorallocate($gambar, 255, 255, 255);
	$orange = imagecolorallocate($gambar, 219, 72, 21);
	// seting data textnya
	$font_size = 60;
	$rotasi = 0;
	$x_text = 130;
	$y_text = 230;
	$font_type = dirname(__FILE__) . "/font/Southmore.ttf";
	$text_input = "Firman Setiawan";


	$text1 = imagettftext($gambar, $font_size, $rotasi, $x_text, $y_text, $white, $font_type, $text_input);//pengaturan text pada gambar

	imagejpeg($gambar,$output);
	
?>
<img src="<?php echo $output; ?>" alt="">