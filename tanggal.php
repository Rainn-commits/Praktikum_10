<html>
<head>
<title> Praktikum Tanggal </title>
</head> <body>
<?php
$namahari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"); // Perbaikan: Menambahkan operator =
$namabulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", 
    "Juli", "Agustus", "September", "Oktober", "November", "Desember"); // Perbaikan: Menambahkan operator =
echo $namahari[date("w")] . ", " . date("j") . " " . $namabulan[date("n")] . " " . date("Y") . "<br />";

echo date("Y/m/d") . "<br />"; 
echo date("l, d-m-Y") . "<br />"; 

echo date("d F Y") . "<br />"; 

echo date("H:i:s") . "<br />"; 
echo date("l, d-m-Y H:i:s") . "<br />"; 
?>
</body>
</html>