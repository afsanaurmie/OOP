<?php 
	
	class ArithmaticOperation
	{
		public $var="Hello World!"
		public function add($a,$b){
			echo $result=$a+$b;
			return $result;
		}
		public function sub($a,$b)
		{echo $result=$a-$b;
			result $result;
		}
		public function mul($a,$b)
		{echo $result=$*$b;
			result $result;
		}
		public function div($a,$b)
		{echo $result=$a/$b;
			result $result;
		}
	}

	$abc = new ArithmaticOperation();
	$abc->add(5,6)->sub(5,6)->mul(5,6)->div(5,6);
	


 ?>