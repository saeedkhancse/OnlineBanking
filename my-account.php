<?php include 'htmlHeader.php';?>
<div id="container">
	
   <?php
   		include 'includes/db_con.php';
   		include 'Header.php';
   		$sql="SELECT * from user_info where id=".$_SESSION['id']; 
   		$q=mysql_query($sql);
   		while($a=mysql_fetch_array($q))
   		{
   			echo "<div id='content_main'>";
   			echo "<h3>Your Account balance is ".$a['balance'].'</h3><br>';
   			echo "Your Trasfer or payment <a href='transfer_details.php'>Details Here</a>";
   		}
   ?>
</div>
<?php include 'rightSidebar.php'; ?>
</div>
<?php include 'Footer.php'; ?>
