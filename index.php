<html>
<head>
<title>passwordgenerate</title>
</head>

<body>
<h1>passwordgenerate</h1>
<h2>Tool for generating a password and it's hash</h2>

<p>You have the possibility to adjust the conditions of the password. Otherwise the conditions are set to default, as displayed in brakets.</p>

<form action="display.php" method="get">
Total count of password: (1)<br>
<input type="tel" name="ammount" value="1"><br><br>
Total charakters of password: (8)<br>
<input type="tel" name="total" value="8"><br><br>
Count of numbers (0-9) in password: (2)<br>
<input type="tel" name="number" value="2"><br><br>
Count of capital letters (A-Z) in password: (2)<br>
<input type="tel" name="capital" value="2"><br><br>
Count of letters (a-z) in password: (2)<br>
<input type="tel" name="letter" value="2"><br><br>
Count of special charakters (<?php
include 'setArray.php';
foreach ($allowedchar['special'] as $char) { echo chr($char) . " "; }
 ?>) in password: (2)<br>
<input type="tel" name="special" value="2"><br>
<input type="submit" value="Generate!">
</input>
</form>

</body>
</html>
