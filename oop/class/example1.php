<?php
	class People {
		public $name = "Lucca Gabriel";

		public function speak() {
			return "Meu nome é $this->name";
		}
	}

	$person = new People();

	echo $person->speak();
?>