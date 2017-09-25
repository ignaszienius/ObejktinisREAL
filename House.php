<?php

class house {
	public $owner;
	public $name;
	public $size;
	public $color;
	public $smell;
	public $sex;


	public function __construct($a1,$a2) {
		$this->owner = $a1;
		$this->name = $a2;
		echo $this->owner . " just got dog named " . $this->name . "<br>";
	
	}

	public function __set($parameter, $value) {
		echo "Some time ago a $parameter of the dog was modified <br>";
		$this->$parameter = $value;
	}

	public function eat($what) {
		echo "Dog is eating <br>";
	}


	public function sleep($where) {
		echo "Dog is sleeping <br>";
	}


	public function bark($why) {
		echo "Dog is barking <br>";
	}
	
	
	public function shit($where) {
		echo "Dog is taking shit <br>";
	}

	public function destroy($what) {
		echo "Dog is taking destroying stuff <br>";
	}

	public function walk($where) {
		echo "Dog is going for a walk <br>";
	}
}