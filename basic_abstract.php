<?php

	//	The math manager.
	abstract class MathManager {
	
		//	The manager's name.
		public $name = "Bob";
		
		//	Says his name.
		public function Greet(){
			$msg = "Hello, the manager's name is " . $this->name . ".";
			return $msg;
		}
	
		//	The method to change.
		abstract function Operation($num1, $num2);
		
	}
	
	//	*****************************
	
	//	Adds two numbers.
	class Adder extends MathManager {
	
		public function Operation($num1, $num2){
			
			$res = $num1 + $num2;
			return "Adder, the result is " . $res;
			
		}
		
	}
	
	//	*****************************
	
	//	Takes away a number from another number.
	class Minuser extends MathManager {
		
		public function Operation($num1, $num2){
			
			$res = "Minuser, the result is " . $num1 - $num2;
			return $res;
			
		}
		
	}
	
	//	*******************************
	
	$addman = new Adder();
	echo $addman->Operation(1, 1);
	echo "<br/>";
	echo $addman->Greet();
	echo "<br/>";
	
	//	*****************************
	
	$minusman = new Minuser();
	echo $minusman->Operation(1, 1);
	echo "<br/>";
	echo $minusman->Greet();
	echo "<br/>";
	
	//	*****************************
	
	$mm = new MathManager();
?>