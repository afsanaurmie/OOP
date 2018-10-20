<?php 


class UseofDestructor
{
	
	function __destruct()
	{
		echo "bye";
	}
}


	$obj=new UseofDestructor();



 ?>