<?php
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

	$dt = new DateTime();

	$intervalDate = new DateInterval("P25D");

	echo $dt->format("d/m/Y H:i:s");

	echo "<br>";

	$dt->add($intervalDate);

	echo "Após formatação do intervalo: ";
	echo $dt->format("d/m/Y H:i:s")
?>