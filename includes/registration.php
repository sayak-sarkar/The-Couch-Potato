<?php
session_start();

mysql_connect("localhost","tcp","tcp123");
mysql_select_db("tcpdb");

 
 $newfname=$_POST['fname'];
 $newlname=$_POST['lname'];
 $newdob=$_POST['dob']; 
 $newgender=$_POST['gender'];
 $newusername=$_POST['uid'];
 $newpassword=$_POST['pwd'];
 $newemail=$_POST['email'];
 
$_SESSION['un']=$newusername;

$sql1="SELECT * FROM user";

$result = mysql_query($sql1);




while ($checkuser = mysql_fetch_row($result))
{
	if ($checkuser[5] == $newusername)
	{
		$user_exists=true;
	}
}

	
if(!$user_exists)
{
	
	$sql="insert into user values('','$newfname','$newlname','$newdob','$newgender','$newusername','$newpassword','$newemail',1)";
	mysql_query($sql); 

	header( 'Location: http://localhost/The_Couch_Potato/includes/Registrationsuccess.php' ) ;
}
else
{
	header( 'Location: http://localhost/The_Couch_Potato/includes/RegistrationUnsuccess.php' ) ;
}

?> 

<!--

 
$sql1="SELECT * FROM user";

$result = mysql_query($sql1);
echo$sql1;
while ($checkuser = mysql_fetch_array($result)
{
	if ($checkuser['usr_uid'] == $newusername)
	{
		$user_exists=true;
	}
}
echo"$user_exists";
echo"hello";
 if($username_exist)
 {
	echo"Sorry the username $newusername has already been taken, please choose a new username.";//<form name='form1' method='post' action='includes/registrationform.html'>
	unset($username);
    include 'register.html';
    exit();
}
 
 else{
	$sql="insert into user values('','$newfname','$newlname','$newdob','$newgender','$newusername','$newpassword','$newlemail')";
	$resut=mysql_query($sql);
	//<form name='form1' method='post' action='includes/RegistrationSuccess.php'>
        if(!result)
 	{
 		echo"insert not successfull";
 	}
 	else
 	{
		echo"successfull";
 	}	
 }






function createUser($uname,$pword) {
        $server->connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $this->users = $server->query("SELECT * FROM user_list");
        while ($check = mysql_fetch_array($this->users) {
            if ($check['uname'] == $uname) {

What I'm not sure about is the best logic for doing this. I was thinking of adding a boolean variable to do something like (after the if statement):

$boolean = true;
}
if ($boolean) {
    echo "User already exists!";
    }
else {
    $server->query("INSERT USER INTO TABLE");
    echo "User added Successfully";
    }





$checkuser = mysql_query("SELECT username FROM users WHERE username='$username'");

$username_exist = mysql_num_rows($checkuser);

if($username_exist > 0){
    echo "I'm sorry but the username you specified has already been taken.  Please pick another one.";
    unset($username);
    include 'register.html';
    exit();
}



















$username = mysql_real_escape_string($_POST[username]);
$password = strip_tags($_POST[password]);
$password = sha1($password);

if(isset($username) && isset($password) && !empty($username) && !empty($password))
{
$sql = mysql_query("SELECT * FROM users_column WHERE username = '$username' AND password = '$password'");

//Check the number of users against database
//with the given criteria.  We're looking for 1 so 
//adding > 0 (greater than zero does the trick). 
$num_rows = mysql_num_rows($sql);
if($num_rows > 0){

//Lets grab and create a variable from the DB to register
//the user's session with.
$gid = mysql_query("SELECT * FROM users_column WHERE username = '$username' AND password = '$password'");
$row = mysql_fetch_assoc($gid);
$uid = $row[userid];

// This is where we register the session.
$_SESSION[valid_user] = $uid;

//Send the user to the member page.  The userid is what the 
//session include runs against.
header('Location: memberpage.php?userid='.$userid);
}

//If it doesn't check out -- throw an error.
else
{
echo 'Invalid Login Information';
}

-->
