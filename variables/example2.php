<?php
$name = "Lucca";
$lastName = "Gabriel";
$completeName = $name . " " . $lastName;

echo $completeName, "<br />";

unset($completeName);

if(isset($completeName)) {
	echo "<br />A variável ainda existe";
} else {
	echo "<br />A variável não existe";
}
?>