<?php 

class person
	{
		private $name="";
		private $age="";
			
		public function setname($name="")

		{
			$this->name=$name;
			return $this;
		}
		public function setage($age="")
		{
			$this->age=$age;
			return $this;
		}
		public function getinfo()
		{
			echo "Hello,My name is".$this->name."and my age is".$this->age."years.";
		}
	}

	$person = new person();
	$person->setname("Afsana Haque")->setage("23")->getinfo();













 ?>