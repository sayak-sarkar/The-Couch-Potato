<html>

<body bgcolor=#0000000>
 <?php
	$value=$_REQUEST['action'];?>
<div id="header-left" align="left"><u><img src="../images/Header.jpg" alt="Header" width="531" height="248" /></u></div>
<form color=white>
<?php
	if( $value==addcat);
	{
	echo"<h2> Category added Successfull <h2>";
	}
	if( $value==remcat);
	{
	echo"<h2> Category renamed Successfull <h2>";
	}
	if( $value==delcat);
	{
	echo"<h2> Category deleted Successfull <h2>";
	}
	if( $value==addgen);
	{
	echo"<h2> Category added Successfull <h2>";
	}
	if( $value==remgen);
	{
	echo"<h2> Category renamed Successfull <h2>";
	}
	if( $value==delgen);
	{
	echo"<h2> Category deleted Successfull <h2>";
	}


<a href="http://localhost/The_Couch_Potato/genre_category.php"> <b><form color=silver>Go back to previous page !!!!<b></form>

</body>
</html>
