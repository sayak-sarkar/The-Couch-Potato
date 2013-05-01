<?php
$value=$_REQUEST['name'];


echo"<a href='admin.php?name=".$value."'><span class='style1'><u>Home</u></span></a><br/><br/><br/>";
echo"<a href='content_management.php?name=".$value."'><span class='style1'><u>Add New Content</u></span></a><br/><br/><br/>";
echo"<span class='style15'><u>Genres</u></span></a><br/>";

	$con=mysql_connect("localhost","tcp","tcp123");

	if(!$con) 
	{
		die('Could not connect: '.mysql_error());
	}

	mysql_select_db("tcpdb",$con);
	
	$sql_genre="SELECT * FROM genre";
	$gen_contents= mysql_query($sql_genre);

	echo"<ul>";
		while($row=mysql_fetch_row($gen_contents)) 
		{
			echo"<li><span class=\"style1\">".$row[1]."</span><br/><br/></li>";
		}
	echo"</ul>";

if($value==admin)
{
	echo"<a href='admin_Administer.php?name=".$value."'><span class='style1'><u>Administer</u></span></a><br/><br/><br/>";
}
?>
<a href="index.php"><span class="style1"><u>Logout</u></span></a><br/>

