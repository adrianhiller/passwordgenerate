<?php

include 'setArray.php';

function uniquerandom($n,$min,$max) {
	$T = Array();
$R = Array();

while( sizeof( $T ) < $n )
   $T[ rand( $min, $max ) ] = 1;

foreach( $T as $r => $t )
   $R[] = $r;
   
   return $R;
}

$passwordchar = [];

foreach ($allowedchar as $char) {
	array_push($passwordchar,$char[mt_rand(0,sizeof($char)-1)]);
	array_push($passwordchar,$char[mt_rand(0,sizeof($char)-1)]);
}

$order = uniquerandom(8,0,7);

if (isset($_GET['d'])) {
	print_r($order);
	echo "<br>";
	print_r($passwordchar);
	echo "<br><br>";
}


echo "Das generierte Passwort lautet: <pre>";
$pw = "";
foreach ($order as $i) {
	echo chr($passwordchar[$i]) . " ";
	$pw .= chr($passwordchar[$i]);
}
echo "</pre>";

$hash = md5($pw);
echo "Der zugehörige Hash-Wert ist: <pre>" . $hash . "</pre>";

?>