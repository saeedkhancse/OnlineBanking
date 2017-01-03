<?php include 'htmlHeader.php';?>
<div id="container">
	
   <?php
   		include 'includes/db_con.php';
   		include 'Header.php';
   		$sql="SELECT * from admin_info where user_id=".$_SESSION['user_id']; 
   		$q=mysql_query($sql);
   		while($a=mysql_fetch_array($q))
   		{
   			echo "<div id='content_main'>";
   			
   		}
   ?>
</div>
<?php include 'rightSidebar1.php'; ?>
</div>
<?php include 'Footer.php'; ?>
