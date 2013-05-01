<table >
<tr>
	<div align="center">
		<span class="style1">
		<?php
		$con=mysql_connect("localhost","tcp","tcp123");

		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db("tcpdb",$con);
		
		$cat=$_REQUEST['cat'];
		$sql_cat="select * from content where con_category='".$cat."'";
		$row_cat=mysql_query($sql_cat);

			
		echo"<ul><h2> Category: ".$cat."<h1></h1>";

		while($row=mysql_fetch_row($row_cat))
		{
			echo"<li><a href='includes/category_data.php?title=".$row[1]."'><span class='style1'>".$row[1]."</span></a><br/><br/></li>";
		}
		echo"</ul>";
		?>


			</span>
	</div>	
</tr>
</table>
