<?php
class Dog {
	private $breed;
	private $age;
	private $colour;
    
    function __construct($breed, $age, $colour) {
    	$this->breed = $breed;
    	$this->age = $age;
    	$this->colour = $colour;
    }
    function __destruct() {
    	echo "destroying. just demonstrated destructor \n";
    }
    
	function setBreed($breed) {
		$this->breed = $breed;
	}
	function getBreed() {
		return $this->breed;
	}
	function setAge($age) {
		$this->age = $age;
	}
	function getAge() {
		return $this->age;
	}
	function setColour($colour) {
		$this->colour = $colour;
	}
	function getColour() {
		return $this->colour;
	}

}
$max = new Dog("Labrador Retriever", 2, "White");
echo $max->getBreed() . "\n";
$max->__destruct();
$max->getColour(); //__destruct called.
?>