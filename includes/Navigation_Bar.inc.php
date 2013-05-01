<?php
	$con=mysql_connect("localhost","tcp","tcp123");

	if(!$con) 
	{
		die('Could not connect: '.mysql_error());
	}

	mysql_select_db("tcpdb",$con);
	
	$sql_categories="SELECT * FROM category";
	$sql_count="SELECT count(*) FROM category";
	
	$cat_count = mysql_query($sql_count);
	$cat_contents= mysql_query($sql_categories);
	$col_num = 100/$cat_count;
?>
<table width="100%" border="1">
	<tr> 
		<?php while($row=mysql_fetch_row($cat_contents)) 
		{
			echo"<td width=".$col_num." class='style1'>";
			echo"<div align='center'>";
			echo"<a href='content_display.php?cat=".$row[1]."'><span class='style1'>".$row[1]." </span></a>";
			echo"</div></td>";
		} ?>
	</tr>
</table>

