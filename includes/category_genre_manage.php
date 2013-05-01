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
			echo" <html><body bgcolor=#0000000><div id=\"header-left\" align=\"left\"><u><img src=\"../images/Header.jpg\" alt=\"Header\" width=\"531\" height=\"248\" /></u></div>";
			echo"<form color=white><h2> Genre added!! successfully <h2>";
			echo"<a href=\"http://localhost/The_Couch_Potato/genre_category.php?name=admin\"> <b><form color=silver>Go back to home page !!!!<b></form>";
			echo"</body>";
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
			echo" <html><body bgcolor=#0000000><div id=\"header-left\" align=\"left\"><u><img src=\"../images/Header.jpg\" alt=\"Header\" width=\"531\" height=\"248\" /></u></div>";
			echo"<form color=white><h2> Genre Renamed!!!! successfully <h2>";
			echo"<a href=\"http://localhost/The_Couch_Potato/genre_category.php?name=admin\"> <b><form color=silver>Go back to home page !!!!<b></form>";
			echo"</body>";
			
		}
		else
		{
			echo mysql_error();
		}
		break;
	}

	case 3:
	{
		$Genres=$_POST['Genres'];
		$sql="delete from genre where gen_name='$Genres'";
		$row=mysql_query($sql);

		if($row)
		{
			echo" <html><body bgcolor=#0000000><div id=\"header-left\" align=\"left\"><u><img src=\"../images/Header.jpg\" alt=\"Header\" width=\"531\" height=\"248\" /></u></div>";
			echo"<form color=white><h2> Genre Deleted!!!! successfully <h2>";
			echo"<a href=\"http://localhost/The_Couch_Potato/genre_category.php?name=admin\"> <b><form color=silver>Go back to home page !!!!<b></form>";
			echo"</body>";
					}
		else
		{
			echo mysql_error();
		}
		break;

	}

	case 11:
	{
		$new_category=$_POST['new_category'];

		$sql="insert into category values('','$new_category')";
		$row=mysql_query($sql); 

		if($row)
		{	
			echo" <html><body bgcolor=#0000000><div id=\"header-left\" align=\"left\"><u><img src=\"../images/Header.jpg\" alt=\"Header\" width=\"531\" height=\"248\" /></u></div>";
			echo"<form color=white><h2> Category Added!!!! successfully <h2>";
			echo"<a href=\"http://localhost/The_Couch_Potato/genre_category.php?name=admin\"> <b><form color=silver>Go back to home page !!!!<b></form>";
			echo"</body>";
			
		}
		else
		{
			echo mysql_error();
		}
		break;	
	}

	case 22:
	{
		$Categories=$_POST['Categories'];
		$new_name=$_POST['new_name'];
		$sql="update category set cat_name='$new_name' where cat_name='$Categories'";
		$row=mysql_query($sql);

		if($row)
		{
			echo" <html><body bgcolor=#0000000><div id=\"header-left\" align=\"left\"><u><img src=\"../images/Header.jpg\" alt=\"Header\" width=\"531\" height=\"248\" /></u></div>";
			echo"<form color=white><h2> Category Renamed!!!! successfully <h2>";
			echo"<a href=\"http://localhost/The_Couch_Potato/genre_category.php?name=admin\"> <b><form color=silver>Go back to home page !!!!<b></form>";
			echo"</body>";
			
		}
		else
		{
			echo mysql_error();
		}
		break;
	}

	case 33:
	{
		$Categories=$_POST['Categories'];
		$sql="delete from category where cat_name='$Categories'";
		$row=mysql_query($sql);

		if($row)
		{
			
			echo" <html><body bgcolor=#0000000><div id=\"header-left\" align=\"left\"><u><img src=\"../images/Header.jpg\" alt=\"Header\" width=\"531\" height=\"248\" /></u></div>";
			echo"<form color=white><h2> Category Deleted!!!! successfully <h2>";
			echo"<a href=\"http://localhost/The_Couch_Potato/genre_category.php?name=admin\"> <b><form color=silver>Go back to home page !!!!<b></form>";
			echo"</body>";
			
		}
		else
		{
			echo mysql_error();
		}
		break;
	}
}

?>
