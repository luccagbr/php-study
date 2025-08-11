<?php
	abstract class Animal {
		public function grunt() {
			return "Som";
		}

		public function move() {
			return "Andar";
		}
	}

	class Dog extends Animal {}

	$boderCollie = new Dog();

	echo $boderCollie->grunt();
?>