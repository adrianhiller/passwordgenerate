<?php

$asciisections=[
[33,33,'special'],
[35,38,'special'],
[40,47,'special'],
[48,57,'number'],
[58,60,'special'],
[62,63,'special'],
[65,90,'capital'],
[97,122,'letter']
];

$allowedchar=[
'number' => [],
'letter' => [],
'capital' => [],
'special' => []
];



 
foreach ($asciisections as $section) {
	for ($i=$section[0]; $i<=$section[1];$i++) {
		array_push($allowedchar[$section[2]], $i);
	}
}



?>