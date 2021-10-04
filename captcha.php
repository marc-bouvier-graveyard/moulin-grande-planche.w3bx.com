<?php
$digitNumber = 6; 
header ("Content-type: image/png");
$_img = imagecreatefrompng('./images/captcha.png');

$foreground = imagecolorallocate($_img, 243, 145, 11);

$i = 0;
while($i < $digitNumber) {
        $digit = mt_rand(0, 9);
        $digits[$i] = $digit;
        $i++;
}

$digitString = null;
foreach ($digits as $string) {
        $digitString .= $string;
}



unset($digit);
unset($i);
unset($string);
unset($digits);

imagefontheight(5);
imagefontwidth(5);
imagestring($_img, 5, 18, 8, $digitString, $foreground);
imagepng($_img);
imagedestroy($_img); 

session_destroy();
session_start(); 
$_SESSION['randomNbr'] = $digitString;
?>
