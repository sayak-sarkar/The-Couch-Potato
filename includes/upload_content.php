<?php

$con=mysql_connect("localhost","tcp","tcp123");

if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("tcpdb",$con);

$title=$_POST['title'];
$tagline=$_POST['tagline'];
$date=$_POST['reldate'];
$genre=$_POST['genre'];
$language=$_POST['language'];
$cast=$_POST['cast'];
$crew=$_POST['crew'];
$prodhouse=$_POST['prodhouse'];
$category=$_POST['category'];
$alt_text=$_POST['alt'];
$article=$_POST['article'];

	
	move_uploaded_file($_FILES['file']['tmp_name'],"/var/www/html/The_Couch_Potato/posters/$alt_text");

	//$instr = fopen("$alt_text","rb");
	//$image = addslashes(fread($instr,filesize("$alt_text")));
	//mysql_query("insert into image values ('','$alt_text','".$image."')");

  //}
//}
//else
//{
  //echo "Invalid File";
//}
//echo"$title $tagline $date $genre $language $cast $crew $prodhouse $category $article";

$sql="insert into content values('','$title','$tagline','$date','$genre','$language','$cast','$crew','$prodhouse','$category','$alt_text','$article')";
$row=mysql_query($sql); 


if($row)
{	
	echo"$date ";
	$d=Date("d/m/y");

	header( 'Location: http://localhost/The_Couch_Potato/includes/add_content_success.php' ) ;
}
else
{
	mysql_error();
}

?>
