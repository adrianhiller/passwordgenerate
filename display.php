<?php
function output($verbose, $var) {
	if(isset($_GET['quiet'])) {
		if($verbose == "0") {
			echo $var;
		}
	} else {
		echo $var;
	}
}
if (isset($_GET['number'])) { $number=$_GET['number']; } else {	$number = "2"; }
if (isset($_GET['letter'])) { $letter=$_GET['letter']; } else { $letter = "2"; }
if (isset($_GET['capital'])) { $capital=$_GET['capital']; } else { $capital = "2"; }
if (isset($_GET['special'])) { $special=$_GET['special']; } else { $special = "2"; }
if (isset($_GET['total'])) { $total=$_GET['total']; } else { $total = "8"; }
if (isset($_GET['ammount'])) { $ammount=$_GET['ammount']; } else { $ammount = 1; }

output(1,"Count numbers: " . $number);
if ($number==2) { output(1," (default)"); }
output(1,"<br>");
output(1,"Count capitals: " . $capital);
if ($capital==2) { output(1," (default)"); }
output(1,"<br>");
output(1,"Count letters: " . $letter);
if ($letter==2) { output(1," (default)"); }
output(1,"<br>");
output(1,"Count special chars: " . $special);
if ($special==2) { output(1," (default)"); }
output(1,"<br>");
output(1,"Total calculated count: " . ($number + $letter + $capital + $special));
if ($number + $letter + $capital + $special==8) { output(1," (default)"); }
output(1,"<br>");
output(1,"Total adjusted count: " . $total);
if ($total==8) { output(1," (default)"); }
output(1,"<br>");

if (($number + $letter + $capital + $special) != $total) {
	output(1,"Calculated count of total charakters doesn't match to adjusted count of total charakters!<br>Calculated count will be set to total charakter count.<br>");
	$total = ($number + $letter + $capital + $special);
}

include 'generate.php';

$all = [];

for ($ammount_count = 0; $ammount_count<$ammount; $ammount_count++){

generate();
output(1,"<br>");
output(1,"Clear password: <pre>");
$passwd = "";
foreach ($order as $i) {
	output(1,chr($passwordchar[$i]) . " ");
	$passwd .= chr($passwordchar[$i]);
}

output(0,$passwd);
// output(0,$ammount_count);
// output(0,$ammount);
// if ($ammount_count+1 != $ammount) {
	output(0,"\n");
// } else {
	// echo "\n";
// }

// if(isset($GET['quiet'])) {
//
// }

output(1,"</pre>");
// output(1,$passwd . "<br>";

output(1,"Decrypted password (hash / md5): <pre>" . $hash . "</pre>");
$hash;

array_push($all, [$passwd, $hash]);

}

if(!isset($_GET['quiet'])) {
print_r($all);
}

?>
