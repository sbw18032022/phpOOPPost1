<?php
	
	//	Defines a wizard
	class Wizard {
	
		//	The wizard's first name
		public $firstName;
		
		//	The wizard's second name
		public $secondName;
		
		//	The wizard's house 
		public $houseName;
		
		//	Every wizard has a secret.
		private $secret;
		
		//	constructor
		public function __construct($fname, $sname, $hname){
			
			$this->firstName = $fname;
			$this->secondName = $sname;
			$this->houseName = $hname;
		
		}
		
		//	Set the secret
		public function SetSecret($sec){
			$this->secret = $sec;
		}
		
		//	Get my secret
		public function GetSecret(){
			return $this->secret;
		}
		
		//	Greet the user
		public function Greet(){
			
			$msg = "Hello! I am " . $this->firstName . " " . $this->secondName . ", and I belong to " . $this->houseName . " house!";
			
			return $msg;
		}
		
	}
	
	//	***************************
	
	$hp = new Wizard("Harry", "Potter", "Gryffindor");
	$hp->SetSecret("I am a great wizard!");
	
	$dm = new Wizard("Draco", "Malfoy", "Slytherin");
	$dm->SetSecret("I don't like Harry!");
	
	//	*****************************
	
	echo $hp->Greet();
	
	echo "<br/>";
	
	echo $dm->Greet();
	
	echo "<br/>";
	
	//	*************************
	
	echo "Harry's first name is: " . $hp->firstName . ".";
	
	echo "<br/>";
	
	echo "Harry's secret is: " . $hp->GetSecret();
	
	echo "<br/>";
	
	echo "Harry's private secret is: " . $hp->secret();
	
	//	**************************
	

	
	
	
	
?>