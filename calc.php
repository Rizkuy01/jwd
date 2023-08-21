<?php  
$num1 = $_POST['bilangan1'];
$num2 = $_POST['bilangan2'];

$jumlah = $num1 + $num2;
$kurang = $num1 - $num2;
$kali = $num1 * $num2;
$bagi = $num1 / $num2;

echo "bilangan 1 : {$num1}<br />";
echo "bilangan 2 : {$num2}<br />";

echo "================================================================ <br />";
echo " hasil penjumlahan adalah : {$jumlah} <br />";
echo " hasil pengurangan adalah : {$kurang} <br />";
echo " hasil perkalian adalah : {$kali} <br />";
echo " hasil pembagian adalah : {$bagi}";
?>