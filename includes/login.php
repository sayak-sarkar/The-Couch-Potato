<?php
session_start();
mysql_connect("localhost","tcp","tcp123");
mysql_select_db("tcpdb");

 
 $newuid=$_POST['username'];
 $newpass=$_POST['password'];

 $sql="select * from user where usr_uid='$newuid' and usr_password='$newpass'";
 $result=mysql_query($sql);
 
 $row=mysql_fetch_row($result);
  
 $count=mysql_num_rows($result);

 
 $_SESSION['id']=$newuid;
 if($count==1)
  {	
	if($row[8]==0)
	{
	    
		header( "Location: http://localhost/The_Couch_Potato/admin.php?name=admin" ) ;
	}
	else
	{	
		header( 'Location: http://localhost/The_Couch_Potato/admin.php?name=usr' ) ;
	}
  }
  else
  {
	header( 'Location: http://localhost/The_Couch_Potato/includes/loginfail.php' ) ;
  }
?>
 

