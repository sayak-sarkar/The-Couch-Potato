<?php 

 $value=$_REQUEST['name'];

echo"<a href='admin.php?name=".$value."'><span class='style1'><u>Home</u></span></a><br/><br/><br/>";
echo"<a href='content_management.php?name=".$value."'><span class='style1'><u>Add New Content</u></span></a><br/><br/><br/>";
echo"<a href='admin_Genre.php?name=".$value."'><span class='style1'><u>Genres</u></span></a><br/><br/><br/>";

if($value == admin)
{
  echo "<a href='admin_Administer.php?name=".$value."'><span class='style1'><u>Administer</u></span></a><br/><br/><br/>";
}

	
?>

<a href="index.php"><span class="style1"><u>Logout</u></span></a><br/><br/><br/>




