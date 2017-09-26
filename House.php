<?php

class house {
	public $owner;
	public $pool;
	public $size;
	public $color;
	public $toilet;


	public function __construct($a1,$a2) {
		$this->owner = $a1;
		$this->pool = $a2;
		echo $this->owner . " just bought a house with " . $this->name . "<br>";
	
	}

	public function __set($parameter, $value) {
		echo "Some time ago a $parameter of the dog was modified <br>";
		$this->$parameter = $value;
	}

	public function __get($parameter) {
		echo "Someone wants to know the $parameter of the dog <br>";
		return $this->$parameter;
	}

	public function build() {
		echo "The house was just finished and the construction is over <br>";
	}


	public function repair($what) {
		echo "The house has some problems, $what needs to be repaired <br>";
	}


	public function fire($why) {
		echo "Oh no! The house was set on fire because $why <br>";
	}
	
	
	public function rent($what) {
		echo "The owner of the house needs money so he rented the $what <br>";
	}

	public function sell($what) {
		echo "Dog is taking destroying stuff <br>";
	}

}