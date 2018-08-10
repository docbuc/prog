<?php
// Datei: php-fpm/www/index.php
require 'vendor/autoload.php';
$Parsedown = new Parsedown();
$img = 'port_de_la_capte.jpg';
$exif = exif_read_data($img);
$md =  <<<EOD
![pic]($img)

# Exif Info:

* Model: {$exif['Model']}
* Aufnahmedatum: {$exif['DateTimeOriginal']}
* Belichtungszeit: {$exif['ExposureTime']}
* Blende: {$exif['FNumber']}
* ISO: {$exif['ISOSpeedRatings']}
EOD;
echo $Parsedown->text($md);

