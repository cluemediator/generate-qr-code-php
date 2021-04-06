<?php
//include the qrlib file
include './library/phpqrcode/qrlib.php';

// Set the data for QR
$text = "CLUE MEDIATOR";

//path or location to save the generated QR code image.
$path = 'images/';

// Create unique id using uniqid() function
$filename = $path.uniqid().".png";
  
// set error correction level L
$err_correction = 'L';
$pixel_size = 8;
$frame_size = 8;
  
// Generates QR Code and stores in given directory
QRcode::png($text, $filename, $err_correction, $pixel_size, $frame_size);
  
// Display QR code from directory
echo "<center><img src='".$filename."'></center>";
?>
