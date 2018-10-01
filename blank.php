<?php

	class Dog
	{
		//members to be inserted 
		private $age;
		private $weight;
		private $color;
		
		public function bark() {echo 'WOOF! WOOF! <br>';}
		
		public function setAge (int $yrs)
		{$this->age = $yrs;}
		public function setWeight (int $lbs)
		{$this->weight = $lbs;}
		public function setColor (string $fur)
		{$this->color = $fur;}
		
		public function getAge() {return $this->age;}
		
		public function getWeight() {return $this->weight;}
		
		public function getColor() {return $this->color;}
	}

	$fido = new Dog();

	$fido->setAge(3);
	$fido->setWeight(15);
	$fido->setColor('brown');

	echo 'fido is a'.$fido->getColor().'dog <br>';
	echo 'fido is'.$fido->getAge().'years old <br>';
	echo 'fido weights'.$fido->getColor().'pounds <br>';

	$fido->bark();
?>