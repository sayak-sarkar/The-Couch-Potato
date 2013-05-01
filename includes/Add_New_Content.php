<form name='form1' method='post' action='includes/upload_content.php' enctype="multipart/form-data">
	<br/>
	<span class="style15">Title: &nbsp</span><br/>
		<input type="text" name="title" size="50"/><br/>
	<br/>
	<span class="style15">Tagline: &nbsp</span><br/>
		<input type="text" name="tagline" size="50"/><br/>
	
	<br/>
	<span class="style15">Release Date: &nbsp</span><br/>
		<input type="text" name="reldate" size="50"/><br/>

	<br/><span class="style15">Genre: &nbsp</span><br/>
	
	<?php
		$con=mysql_connect("localhost","tcp","tcp123");

		if(!$con) 
		{
			die('Could not connect: '.mysql_error());
		}

		mysql_select_db("tcpdb",$con);
	
		$sql_genre="SELECT * FROM genre";
		$cat_contents_genre= mysql_query($sql_genre);
	?>
	<select name="genre">
		<?php while($row=mysql_fetch_row($cat_contents_genre)) 
		{
			echo"<option value=".$row[1].">".$row[1]."</option>>";
				
		} ?>

	</select>

	<br/>
	
	<br/>
	<span class="style15">Language: &nbsp</span><br/>
		<input type="text" name="language" size="50"/><br/>

	<br/>	
	<span class="style15">Cast: &nbsp</span><br/>
		<textarea rows="5" cols="50" name=cast></textarea><br/>
	
	<br/>	
	<span class="style15">Crew: &nbsp</span><br/>
		<textarea rows="5" cols="50" name=crew></textarea><br/>

	<br/>	
	<span class="style15">Production House: &nbsp</span><br/>
		<input type="textbox" name="prodhouse" size="25"/><br/>

	<br/><span class="style15">Category: &nbsp</span><br/>
	

	<?php
		
		$sql_categories="SELECT * FROM category";
		$sql_count="SELECT count(*) FROM category";
	
		$cat_count = mysql_query($sql_count);
		$cat_contents= mysql_query($sql_categories);
	?>
	<select name="category">
		<?php while($row=mysql_fetch_row($cat_contents)) 
		{
			echo"<option value=".$row[1].">".$row[1]."</option>>";
				
		} ?>

	</select>
	<br/>
	<br/>
	<span class="style15">Image Path: &nbsp<input type="file" name="file" id="file"/></span><br/>
		<!--<input type="submit" name="upload" value="Upload"/><br/>-->
	<br/>
	<span class="style15">Alternate Text For Image: &nbsp</span><br/>
		<input type="text" name="alt" size="50"/><br/>
	<br/>	
	<span class="style15">Article: &nbsp</span><br/>
		<textarea rows="10" cols="100" name="article"></textarea><br/>
	
	<input type="submit" name="add_movie" value="Add Content"/>&nbsp&nbsp<input type="reset" name="clear" value="Clear"/><br/><br/>
</form>
