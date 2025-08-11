<?php
 	class AutoMobileOrMotorcycle {
 		private $model;
 		private $name;
 		private $year;
 		private $status;
 		private $arrow;

 		public function __construct($model, $name, $year, $status = false) {
 			$this->model = $model;
 			$this->name = $name;
 			$this->year = $year;
 			$this->status = $status;
 		}

 		public function getName() {
 			return $this->name;	
 		}

 		public function getModel() {
 			return $this->model;	
 		}

 		public function getYear() {
 			return $this->year;	
 		}

 		public function getStatus() {
 			return $this->status;	
 		}

 		public function getArrow() {
 			return $this->arrow;	
 		}

 		public function accelerate() {
 			$this.status = true;
 		}

 		public function brake() {
 			$this.status = false;
 		}

 		public function activateArrow($direction) {
 			$this->arrow = $direction;
 		}
 	}

 	class Car extends AutoMobileOrMotorcycle {}
?>