<?php
// Datei: prog/php-fpm/www/index.php
require 'vendor/autoload.php';
$Parsedown = new Parsedown();
$img = 'erto.jpg';
$exif = exif_read_data($img);
$md =  <<<EOD
![pic]($img)

# Exif Info:

* Kamera: {$exif['Make']}/{$exif['Model']}
* Aufnahmedatum: {$exif['DateTimeOriginal']}
* Belichtungszeit: {$exif['ExposureTime']}
* Blende: {$exif['FNumber']}
* ISO: {$exif['ISOSpeedRatings']}
EOD;
echo $Parsedown->text($md);
