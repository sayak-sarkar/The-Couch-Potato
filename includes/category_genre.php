<?php
$con=mysql_connect("localhost","tcp","tcp123");

if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("tcpdb",$con);


 $value=$_REQUEST['name'];

//echo "<input type='text' value=".$value.">";

switch($value)
{
	case 1:
	{
		$new_genre=$_POST['new_genre'];
		$sql="insert into genre values('','$new_genre')";
		$row=mysql_query($sql); 

		if($row)
		{
			echo"Genre added!!";
		}
		else
		{
			echo mysql_error();
		}
		break;
	}

	case 2:
	{
		$Genres=$_POST['Genres'];
		$new_name=$_POST['new_name'];
		$sql="update genre set gen_name='$new_name' where gen_name='$Genres'";
		$row=mysql_query($sql);

		if($row)
		{
			echo"Genre Renamed!!";
		}
		else
		{
			echo mysql_error();
		}

	}

	case 3:
	{
		$Genres=$_POST['Genres'];
		$sql="delete from genre where gen_name='$Genres'";
		$row=mysql_query($sql);

		if($row)
		{
			echo"Genre Deleted!!";
		}
		else
		{
			echo mysql_error();
		}


	}

	case 11:
	{
		$new_category=$_POST['new_category'];

		$sql="insert into category values('','$new_category')";
		$row=mysql_query($sql); 

		if($row)
		{
			echo"Category added!!";
		}
		else
		{
			echo mysql_error();
		}
	}

	case 22:
	{
		$Categories=$_POST['Categories'];
		$new_name=$_POST['new_name'];
		$sql="update category set cat_name='$new_name' where cat_name='$Categories'";
		$row=mysql_query($sql);

		if($row)
		{
			echo"Category Renamed!!";
		}
		else
		{
			echo mysql_error();
		}
	}

	case 33:
	{
		$Categories=$_POST['Categories'];
		$sql="delete from category where cat_name='$Categories'";
		$row=mysql_query($sql);

		if($row)
		{
			echo"Genre Deleted!!";
		}
		else
		{
			echo mysql_error();
		}
	}
}

?>
