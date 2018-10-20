<?php 


class UseofConstructor
{
	
	function __construct()
	{
		echo "Hello World";
	}
	function __destruct()
	{
		echo "<br";
		echo "bye";
	}
}


	$obj=new UseofConstructor();



 ?>