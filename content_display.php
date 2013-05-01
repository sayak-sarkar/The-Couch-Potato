    <html>
	<head> 
	<title>The Couch Potato</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>	
	</head>
	 <body>

	
			
		<font color=silver>
		<?php
		session_start();
		
		echo"<span class=style1>Welcome: <b>".$_SESSION['id']."</b>"?>
		</span></form>
		
		  <?php include('includes/Header_Logedin.inc.php'); ?>

  	
		  <?php include('includes/Navigation_Bar.inc.php'); ?>

		
		<table cellpadding=50>
			<tr>
			<td valign=top>
		  		<?php include('includes/Admin_Sidebar.php'); ?>
			<td>
		
		
			<td>
				<?php include('includes/content_display_body.php');?>
				
			</td>
		</tr>	
	</table>
	

  	<?php include('includes/footer.inc.php'); ?>


	</body>
    </html>



