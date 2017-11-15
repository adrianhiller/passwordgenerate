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

foreach ($allowedchar as $key => $char) {
	for ($i=0; $i<=$$key; $i++) {
		array_push($passwordchar,$char[mt_rand(0,sizeof($char)-1)]);
	}
}

$order = uniquerandom($total, 0, $total-1);

if (isset($_GET['d'])) {
	print_r($order);
	echo "<br>";
	print_r($passwordchar);
	echo "<br><br>";
}

$pw = "";
foreach ($order as $i) {
	$pw .= chr($passwordchar[$i]);
}
$hash = md5($pw);

?>