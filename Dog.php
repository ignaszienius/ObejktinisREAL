<?php

class dog {
	public $owner;
	public $name;
	public $size;
	private $color;
	private $breed;
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

	public function __get($parameter) {
		echo "Someone wants to know the $parameter of the dog <br>";
		return $this->$parameter;
	}

	public function eat($what) {
		echo "Dog is eating $what <br>";
	}


	public function sleep($where) {
		echo "Dog is sleeping $where <br>";
	}


	public function bark($why) {
		echo "Dog is barking $why <br>";
	}
	
	
	public function shit($where) {
		echo "Dog is taking shit $where <br>";
	}

	public function destroy($what) {
		echo "Dog is taking destroying $what <br>";
	}

	public function walk($where) {
		echo "Dog is going for a walk $where <br>";
	}
}