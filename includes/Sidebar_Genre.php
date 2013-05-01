<a href="index.php"><span class="style1"><u>Home</u></span></a><br/><br/><br/>
<a href="Genre.php"><span class="style1"><u>Genres</u></span></a><br/>
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
			echo"<li><span class=\"style1\">".$row[1]."</span><br/><br/></li>";
		}
	echo"</ul>";
?><br/>
<a href="html/help.html"><span class="style1"><u>Help</u></span></a>
