<?php
	class Computer {
		private $processor;
		private $motherBoard;
		private $ramMemory;
		private $cabinete;
		private $storage;
		private $status;

		public function __construct($processor,$motherBoard, $ramMemory, $cabinete, $storage, $status = false) {
			$this->processor = $processor;
			$this->motherBoard = $motherBoard;
			$this->ramMemory = $ramMemory;
			$this->cabinete = $cabinete;
			$this->storage = $storage;
			$this->status = $status;
		}

		public function start() {
			$this->status = true;
		}

		public function shutDown() {
			$this->status = false;
		}

		public function getProcessor() {
			return $this->processor;

		}

		public function getMotherBoard() {
			return $this->motherBoard;
		}

		public function getRamMemory() {
			return $this->ramMemory;
		}

		public function getCabinete() {
			return $this->cabinete;
		}

		public function getStorage() {
			return $this->storage;
		}

		public function getStatus() {
			return $this->status;
		}
	}

	$computer = new Computer("Intel Core i7 8100", "H310m Gigabyte", "2666Mhz", "Redragon", Array("type" => "SSD", "size" => 960000));

	echo $computer->getProcessor();

	try {
		echo "<br><br>Entrou no try"
	} catch() {
		echo "<br><br>Entrou no erro"
	} finally {
		echo "<br><br>finalizou"
	}
?>