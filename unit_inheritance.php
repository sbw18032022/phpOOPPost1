<?php

	//	Unit class represents a unit object.
	class Unit {
		
		//	Unit attacks.
		public function Attack(){
			$msg = $this->unitName . " attacking with " . $this->attackPoints . " power!";
			return $msg;
		}
		
		//	Unit gets hit
		public function GetHit($dmg){
			
			//	Calculated damage is damage minus defence points.
			$calculatedDamage = $dmg - $this->defencePoints;
			
			$reportedDmg = $calculatedDamage;
			
			//	No need to report calculated damage if it is less than 0.
			if($calculatedDamage < 0){
				$reportedDmg = 0;
			}
			
			//	Send message to user.
			$msg = $this->unitName . " is hit! Gross damage: " . $dmg . ". Calculated damage: " . $reportedDmg . ".";
			
			//	Re assign hit points.
			$this->hitPoints -= $calculatedDamage;
			
			return $msg;
		}
		
		//	Checks if unit is dead.
		public function CheckIfDead(){
			
			$msg = "UNIT REPORTING";
			
			if($this->hitPoints > 0){
				$msg = $this->unitName . " survives!";
			} else {
				$msg = $this->unitName . " is dead!";
			}
			
			return $msg;
			
		}
		
	}
	
	//	********************************
	
	//	Infantry class 
	class Infantry extends Unit {
	
		//	The unit's name.
		public $unitName;

		//	The unit's health points. 
		public $hitPoints;
			
		//	The unit's attack points.
		public $attackPoints;
		
		//	The unit's defence points.
		public $defencePoints;
		
		//	Constructor
		public function __construct($un, $hp, $at, $def){
		
			$this->unitName = $un;
			$this->hitPoints = $hp;
			$this->attackPoints = $attackPoints = $at;
			$this->defencePoints = $def;
		
		}
		
	}
	
	//	********************************
	
	//	Tank class 
	class Tank extends Unit {
		
		//	The unit's name.
		public $unitName;

		//	The unit's health points. 
		public $hitPoints;
			
		//	The unit's attack points.
		public $attackPoints;
		
		//	The unit's defence points.
		public $defencePoints;
		
		//	Constructor
		public function __construct($un, $hp, $at, $def){
		
			$this->unitName = $un;
			$this->hitPoints = $hp;
			$this->attackPoints = $attackPoints = $at;
			$this->defencePoints = $def;
		
		}
		
	}
	
	//	****************************
	
	$inf = new Infantry("Infantry", 100, 20, 15);
	
	echo $inf->Attack();
	echo "<br/>";
	
	echo $inf->GetHit(50);
	echo "<br/>";
	
	echo $inf->CheckIfDead();
	echo "<br/>";
	
	//	******************************
	
	echo "<br/>";
	
	$tank = new Tank("Tank", 100, 50, 80);
	
	echo $tank->Attack();
	echo "<br/>";
	
	echo $tank->GetHit(50);
	echo "<br/>";
	
	echo $tank->CheckIfDead();
	echo "<br/>";
	
?>