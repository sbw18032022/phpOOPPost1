<?php
	
	//	The interface 
	interface IJobs {
		public function DoJob($item);
	}
	
	//	******************
	
	
	class Freelancer implements IJobs {
		
		public $name;
		
		public function __construct($name){
			$this->name = $name;
		}
		
		public function DoJob($item){
			$msg = "I, " . $this->name . ", will do my job of " . strtoupper($item) . ".";
			return $msg;
		}
		
	}
	
	//	****************************
	
	
	class Janitor implements IJobs {
		
		public $name;
		
		public function __construct($name){
			$this->name = $name;
		}
		
	}
	
	
	
	//	**********************
	
	$flncr = new Freelancer("Freelancer");
	echo $flncr->DoJob("website design");
	echo "<br/>";
	
	//	*********************************
	
	$jan = new Janitor("Janitor");
	echo $jan->DoJob("cleaning toilets");
	echo "<br/>";
	
	//	**********************************
	
	
?>