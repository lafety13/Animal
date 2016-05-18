<?php

class Animal
{
	private $_name;

	public function __construct($name)
	{
		$this->_name = $name;
	}
	
	public function getName()
	{
		return $this->_name;
	}

}

class Cat extends Animal
{
	public function meow()
	{
		return "Cat {$this->getName()} is saying meow";
	}

}

$cat = new Cat('garfield');

echo $cat->getName() === 'garfield' && 
	 $cat->meow() === 'Cat garfield is saying meow' ? true : 0;
