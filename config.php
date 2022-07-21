<?php
extract($_REQUEST);
$file = fopen("pesan.txt", "a");

fwrite($file, "Nama :");
fwrite($file, $_GET["nama"] . "\n");
fwrite($file, "Email :");
fwrite($file, $_GET["email"] . "\n");
fwrite($file, "Np HP :");
fwrite($file, $_GET["phone"] . "\n");
fwrite($file, "Pesan :");
fwrite($file, $_GET["pesan"] . "\n\n");
fclose($file);
header("location: index.php?b=1#contact");
