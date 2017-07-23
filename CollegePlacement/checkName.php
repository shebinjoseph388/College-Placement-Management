<?php
error_reporting('E_ALL^E_NOTICE');

include('dbcon.php');
$name=trim($_REQUEST['s_fullname']);

if($name=="")
{
	echo " Don't U have a name?.";
}

else
	{
	
		if(!preg_match('/^[a-zA-Z\s]+$/',$name))
		{
		//$errors['name']="Name Can't Contain Numeric Value.";
		echo "Name Can't Contain Numeric Value.";
		}
		else
		{
			if(strlen($name)>6)
			{
				$valid_names=$name;
			}
			else
			{
			//$errors['name']="Name Should Be Greater Than 6 Characters.";
			echo "Name Should Be Greater Than 6 Characters$name.";
			}
	
		}
		/*else
		{
			echo "<span style='color:green;'>Correct.</span>";		
		}*/
	}

?>