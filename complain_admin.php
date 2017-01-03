<?php include 'htmlHeader.php';?>
<div id="container">
	
   <?php
      include 'Header.php';
      ?>
      <div id='content_main'>
         
      <?php
   		include 'includes/db_con.php';
         
   		 $sql="SELECT * from complain where acc_no in (SELECT uname from user_info)"; 
         $q=mysql_query($sql);
         $count=mysql_num_rows($q);
         if($count>0)
         {
            echo "<table style='width:120%;border-collapse:collapse;margin:30px;' border=2>";
            echo "<tr><td><h3>Id</h3></td><td><h3>Account no</h3></td><td><h3>contact no</h3></td><td><h3>Email</h3></td><td><h3>Description</h3></td></tr>";
            $i=1;
            while($a=mysql_fetch_array($q))
            {
               echo "<tr>";
               echo "<td>".$i."</td>";
               echo "<td>".$a['acc_no']."</td>";
               echo "<td>".$a['contact_no']."</td>";
               echo "<td>".$a['email']."</td>";
               echo "<td>".$a['description']."</td>";
               echo "</tr>";

               $i++;
               
            }
            echo "</table>";
         }
         
   		
	  	
   ?>
</div>
</div>
<?php include 'Footer.php'; ?>
