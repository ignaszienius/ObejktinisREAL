<?php

class car {
	private $color;
	public $make;
	public $model;
	public $fuel;
	public $license;
	private $owner;

	public function __construct($a1,$a2) {
		$this->license = $a1;
		$this->owner = $a2;
		echo "New car was created <br>";
		echo $this->owner . " has stolen a car with license plate " . $this->license . "<br>";
	}

	public function __set($parameter, $value) {
		echo "Somebody has just changed the $parameter of my car";
		$this->$parameter = $value;
		

	}

	public function __get($parameter) {
		echo "Someone is checking the $parameter <br>";
		return $this->$parameter;
	}

	public function go() {
		echo $this->owner . " is driving this car<br>";
	}


	public function crash() {
		echo "Just crashed :( <br>";
	}


	public function repair() {
		echo "This car just got repaired <br>";
	}

}