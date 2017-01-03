<?php include 'htmlHeader.php';?>
<div id="container">
	
   <?php
      include 'Header.php';
      ?>
      <div id='content_main'>
         <h2>Transfer Details</h2>
      <?php
   		include 'includes/db_con.php';
         date_default_timezone_set('UTC');
   		
   		$sql="SELECT * from transfer_balance where user_id=".$_SESSION['id']; 
   		$q=mysql_query($sql);
         $count=mysql_num_rows($q);
         if($count>0)
         {
            echo "<table style='width:100%;border-collapse:collapse;margin:10px;' border=1>";
            echo "<tr><td>Id</td><td>Transferred to</td><td>Amount</td><td>Date</td></tr>";
            $i=1;
      		while($a=mysql_fetch_array($q))
      		{
      			echo "<tr>";
               echo "<td>".$i."</td>";
               $sqlto="SELECT email from user_info where id=".$a['to_account'];
               
               $qt=mysql_query($sqlto);
               while ($a2=mysql_fetch_array($qt)) {
                  echo "<td>".$a2['email']."</td>";
               }
               echo "<td>".$a['amount']."</td>";
               echo "<td>".date('d.m.y',strtotime($a['date']))."</td>";
               echo "</tr>";

               $i++;
      			
      		}
            echo "</table>";
         }
         else
         {
            echo "No Balance Transfer Yet";
         }
   ?>
   <h2>Bill Payment Details</h2>
      <?php
         include 'includes/db_con.php';
         
         $sql="SELECT * from payment where u_id=".$_SESSION['id']; 
         $q=mysql_query($sql);
         $count=mysql_num_rows($q);
         if($count>0)
         {
            echo "<table style='width:100%;border-collapse:collapse;margin:10px;' border=1>";
            echo "<tr><td>Id</td><td>Payment to</td><td>Amount</td><td>Date</td></tr>";
            $i=1;
            while($a=mysql_fetch_array($q))
            {
               echo "<tr>";
               echo "<td>".$i."</td>";
               
               echo "<td>".$a['company']."</td>";
               
               echo "<td>".$a['amount']."</td>";
               echo "<td>".date('d.m.y',strtotime($a['date']))."</td>";
               echo "</tr>";

               $i++;
               
            }
            echo "</table>";
         }
         else
         {
            echo "No Balance Transfer Yet";
         }
   ?>
</div>
</div>
<?php include 'Footer.php'; ?>
