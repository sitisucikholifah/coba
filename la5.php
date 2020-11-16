<DOCTYPE html>
<head>                                                                                                                                                                                                                                                                                  
    <title>menghitung</title>
</head>
<body>
<?php
$teks1="Diketahui:";
$teks2="bil1=30,bil2=45,bil3=57,bil4=63,bil5=20";
$teks3="Hasil Dari:(1/0)";
$bil1=30;
$bil2=45                                       ;
$bil3=57;
$bil4=63;                                                                                         
$bil5=20;
$hasil=$bil1<$bil2;
$hasil=$bil3<>$bil4;
$hasil=$bil2==$bil4;
$hasil=!($bil4>$bil1);
$hasil=($bil5<>$bil1) || !($bil2==$bil4);
$hasil=($bil2<>$bil4) && !($bil1<=$bil3);

$teks1="Belajar Menghitung";
$teks2="Volume Balok";
$teks3="Menggunakan Operator Aritmatika";
$panjang="10";
$lebar="7";
$tinggi="15";
$hasil="$panjang*$lebar*$tinggi";

echo"Diketahui:";
echo"<br> Hasil Dari : (1/0) </br>";
echo"<br><bil1=30, bil2=45, bil3=57, bil4=63, bil5=20</br>";
echo"1. $bil1<$bil2=.....<br>";
echo"2. $bil3<>$bil4=.....<br>";
echo"3. $bil2==$bil4=.....<br>";
echo"4. !($bil4>$bil1)=.....<br>";
echo"5. !($bil4>$bil1) or !($bil2==$bil4)=.....<br>";
echo"6. !($bil2<>$bil4) and !($bil1<=$bil3)=.....<br>";

echo"Belajar Menghitung Volume Balok:<br>";
echo"panjang=$panjang<br>";
echo"lebar=$lebar<br>";
echo"tinggi=$tinggi<br>";
echo"Hasil=$hasil<br>";
?>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         