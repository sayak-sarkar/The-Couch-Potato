<?php
	$con=mysql_connect("localhost","tcp","tcp123");

	if(!$con) 
	{
		die('Could not connect: '.mysql_error());
	}

	mysql_select_db("tcpdb",$con);
	
	echo"<form name='form_add_genre' method='POST' action='includes/category_genre_manage.php?name=1'>
		<div id='add_new_genre'>
			<div>
				<span class='style9'>
				<span class='style1'>Add New Genre</span><br/>
					<input type='text' name='new_genre' size='20'/><br/>
					<input type='submit' name='Add' value='Add'/>&nbsp&nbsp<input type='reset' name='clear'value='Clear'>
				</span>
			</div>
		</div>
		</form>";

		
			
		echo"<form name='form_rename_genre' method='POST' action='includes/category_genre_manage.php?name=2'>";
			$sql_genre="SELECT * FROM genre";
			$gen_contents= mysql_query($sql_genre);			
			echo"<span class='style1'>Rename Genre:</span><br/>";			
			echo"<select name='Genres'>";
				while($row=mysql_fetch_row($gen_contents)) 
				{
					echo"<option value=\"".$row[1]."\">".$row[1]."</option>";
				}
			echo"</select><br/>
			<span class='style1'>New Name:</span><br/>
			<input type='text' name='new_name' size='20'/><br/>";
			echo"<input type='submit' name='rename' value='Rename'/>&nbsp&nbsp<input type='reset' name='clear'value='Clear'>
		</form>";

		echo"<form name='form_delete_genre' method='POST' action='includes/category_genre_manage.php?name=3'>";
			echo"<span class='style1'>Delete Genre:</span><br/>";
			$sql_genre="SELECT * FROM genre";
			$gen_contents= mysql_query($sql_genre);			
			echo"<select name='Genres'>";
				while($row=mysql_fetch_row($gen_contents)) 
				{
					echo"<option value=\"".$row[1]."\">".$row[1]."</option>";
				}
			echo"</select><br/>";
		echo"<input type='submit' name='delete' value='Delete'/>
		</form><br/><br/>";

		echo"<form name='form_add_category' method='POST' action='includes/category_genre_manage.php?name=11'>
			<div id='add_new_category'>
				<div>
					<span class='style9'>
					<span class='style1'>Add New Category</span><br/>
						<input type='text' name='new_category' size='20'/><br/>
						<input type='submit' name='Add' value='Add'/>&nbsp&nbsp<input type='reset' name='clear'value='Clear'/>
					</span>
				</div>
			</div>
		</form>";
				

		echo"<form name='form_rename_category' method='POST' action='includes/category_genre_manage.php?name=22'>";
			$sql_cat="SELECT * FROM category";
			$cat_contents= mysql_query($sql_cat);
			echo"<span class='style1'>Rename Category:</span><br/>";		
			echo"<select name='Categories'>";
			while($row=mysql_fetch_row($cat_contents)) 
			{
					echo"<option value=\"".$row[1]."\">".$row[1]."</option>";
			}
			echo"</select><br/>
			<span class='style1'>New Name:</span><br/>
			<input type='text' name=\"new_name\" size=\"20\"/><br/>";
			echo"<input type='submit' name='rename' value='Rename'/>&nbsp&nbsp<input type='reset' name='clear'value='Clear'>
		</form>";
		
		echo"<form name='form_delete_category' method='POST' action='includes/category_genre_manage.php?name=33'>";
		$sql_cat="SELECT * FROM category";
		$cat_contents= mysql_query($sql_cat);
		echo"<span class=\"style1\">Delete Category:</span><br/>";		
		echo"<select name=\"Categories\">";
		while($row=mysql_fetch_row($cat_contents)) 
		{
			echo"<option value=\"".$row[1]."\">".$row[1]."</option>";
		}
		echo"</select><br/>";
		echo"<input type='submit' name='delete' value='Delete'/>
		</form>";

?>

