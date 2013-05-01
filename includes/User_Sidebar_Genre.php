<div id="sidebar">
<div align="left"><a href="admin.php"><span class="style15"><u>Home</u></span></a></div><br/>
<div align="left"><a href="includes/Add_Content.php"><span class="style15"><u>Add New Content</u></a></span></div><br/>
<div align="left"><a href="user_Genre.php"><span class="style15"><u>Genres</u></span></a></div><br/>
<?php
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
			echo"<li><div align=\"left\"><span class=\"style1\">".$row[1]."</span></div><br/></li>";
		}
	echo"</ul>";
?><div align="left"><a href="html/help.html"><span class="style15"><u>Help</u></span></a></div><br/>
<div align="left"><a href="index.php"><span class="style15"><u>Logout</u></span></a></div><br/>
</div>
