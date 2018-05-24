<?php 
	class Person {
		private $name;
		private $email;
		public static $ageLimit = 40;

		public function __construct($name, $email){
			$this->name = $name;
			$this->email = $email;

			echo __CLASS__.' created.<br>';
		}
	

		public function getName(){
			return $this->name;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function getAgeLimit(){
			return self::$ageLimit;
		}
	}

	echo Person::getAgeLimit();

	$person1 = new Person('John Doe', 'j@d.com');
	// $person1->setName('John Doe');

	echo $person1->getName();

	class Customer extends Person{
		private $balance;

		public function __construct($name, $email, $balance){
			parent::__construct($name, $email, $balance);
			echo 'A new '.__CLASS__.' has been created.';
			$this->balance = $balance;
		}

		public function setBalance($balance){
			$this->balance = $balance;
		}
		public function getBalance(){
			return $this->balance.'<br>';
		}
	}

	$customer1 = new Customer('jon', 'j@d.com', 500);
	echo $customer1->getBalance();
?>	