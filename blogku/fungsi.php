<?php 


$uniqueString = uniqid();
$uniqueInt = crc32($uniqueString);
echo "Nilai integer dari uniqid: " . $uniqueInt;


?>