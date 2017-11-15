<?php

if (isset($_GET['number'])) { $number=$_GET['number']; } else {	$number = "2"; }
if (isset($_GET['letter'])) { $letter=$_GET['letter']; } else { $letter = "2"; }
if (isset($_GET['capital'])) { $capital=$_GET['capital']; } else { $capital = "2"; }
if (isset($_GET['special'])) { $special=$_GET['special']; } else { $special = "2"; }
if (isset($_GET['total'])) { $total=$_GET['total']; } else { $total = "8"; }

echo "Count numbers: " . $number;
if ($number==2) { echo " (default)"; }
echo "<br>";
echo "Count capitals: " . $capital;
if ($capital==2) { echo " (default)"; }
echo "<br>";
echo "Count letters: " . $letter;
if ($letter==2) { echo " (default)"; }
echo "<br>";
echo "Count special chars: " . $special;
if ($special==2) { echo " (default)"; }
echo "<br>";
echo "Total calculated count: " . ($number + $letter + $capital + $special);
if ($number + $letter + $capital + $special==8) { echo " (default)"; }
echo "<br>";
echo "Total adjusted count: " . $total;
if ($total==8) { echo " (default)"; }
echo "<br>";

if (($number + $letter + $capital + $special) != $total) {
	echo "Calculated count of total charakters doesn't match to adjusted count of total charakters!<br>Calculated count will be set to total charakter count.<br>";
	$total = ($number + $letter + $capital + $special);
}

include 'generate.php';
echo "<br>"; 
echo "Clear password: <pre>";
foreach ($order as $i) {
	echo chr($passwordchar[$i]) . " ";
}
echo "</pre>";

echo "Decrypted password (hash / md5): <pre>" . $hash . "</pre>";
$hash;

?>