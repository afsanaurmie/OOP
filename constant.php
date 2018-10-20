<?php 
	
	class constant
	{
		public const a="America";

		public static function abc()
		{
			echo  self::a;
		}
	}

	constant::abc();
	echo constant::a;
	


 ?>