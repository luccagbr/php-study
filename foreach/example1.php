<div class="container">
	<form class="formUser" name="teste">
		<div>
			Nome:
			<input type="text" name="name">
		</div>
		<div>
			Data de nascimento:
			<input type="date" name="birthday_date">
		</div>
		<div class="buttonForm">
			<button>Enviar</button>				
		</div>
	</form>
</div>

<?php
	if(isset($_GET)) {
		$formTest = $_GET;
		foreach($formTest as $index => $option) {
			echo $option;
			echo "<br>";
		}
	}
?>