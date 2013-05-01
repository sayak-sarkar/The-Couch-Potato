<html>

<body bgcolor=#0000000>
<font color=silver>
<div id="header-left" align="left"><u><img src='../images/Header.jpg' alt='Header' width="531" height="248" /></u></div>

<table >
<tr>
	<div align="justify">
		<span class="style1">
		<?php
		$con=mysql_connect("localhost","tcp","tcp123");

		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db("tcpdb",$con);
		
		$title=$_REQUEST['title'];
		
		$sql_title="select * from content where con_title='$title'";
		$row_title=mysql_query($sql_title);

		echo"<ul><h1>".$title."</h1>";
				

		while($row=mysql_fetch_row($row_title))
		{
			if($row[10]) {echo"<span class='style1'><img src='../posters/".$row[10]."'/></span>";}
			if($row[2]) {echo"<h3><span class='style1'>".$row[2]."</span></h3>";}	
			if($row[3]=0000-00-00) {echo"<li><span class='style1'>Release Date: ".$row[3]."</span><br/><br/></li>";}
			if($row[4]) {echo"<li><span class='style1'><b>Genre: </b>".$row[4]."</span><br/><br/></li>";}
			if($row[5]) {echo"<li><span class='style1'><b>Language: </b>".$row[5]."</span><br/><br/></li>";}
			if($row[6]) {echo"<li><span class='style1'><b>Cast: </b>".$row[6]."</span><br/><br/></li>";}
			if($row[7]) {echo"<li><span class='style1'><b>Crew: </b>".$row[7]."</span><br/><br/></li>";}
			if($row[8]) {echo"<li><span class='style1'><b>Production House: </b>".$row[8]."</span><br/><br/></li>";}
			if($row[9]) {echo"<li><span class='style1'><b>Category: </b>".$row[9]."</span><br/><br/></li>";}
			//if($row[10]) {echo"<li><span class='style1'><b>alt: </b>".$row[10]."</span><br/><br/></li>";}

			if($row[11]) {echo"<li><span class='style1'><b>Summary: </b>".$row[11]."</span><br/><br/></li>";}
		}
		echo"</ul>";
		echo"<br/><span class='style1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='../content_display.php?cat='>Return To Previous Page</a></span>"
		?>
		</span>	
	</div>
</tr>
</table>
</font>
</body>
</html>
