<?php

class Calc{
	public $num1;
	public $num2;	
	public $cal;

	public function __construct($num1,$num2,$cal){
		$this->num1=$num1;
		$this->num2=$num2;
		$this->cal=$cal; 
		
	}
	public function caclMethod(){

		//echo $this->cal.'<br>';

		switch ($this->cal) {

			case 'Add':
				$result=$this->num1 + $this->num2;
				break;
			case 'Multiply':
				$result=$this->num1 * $this->num2;
				break;
			case 'Subtract':
				$result=$this->num1 - $this->num2;
				break;				
			
			default:
				$result='Error';
				break;
		}
		return $result;
	}
}