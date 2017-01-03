<?php include 'htmlHeader.php'; ?>

<div id="container">
    <?php include 'Header.php'; ?>
    <div id="content_main">
	
        <?php
         
         if (isset($_POST['area']) ) 
         {
       
            include 'includes/db_con.php';
            $Area = $_POST['area'];
            
           
            $query = "SELECT branch_name,address,phone FROM`branches` WHERE `area` LIKE'%".($Area)."%'";
            $query_run = mysql_query($query);
              
            if(mysql_num_rows($query_run)){
                  echo "<table style='width:120%;border-collapse:collapse;margin:20px;' border=2>";
                   echo "<tr><td><h3>Id</h3></td><td><h3>Branch Name</h3></td><td><h3>Address</h3></td><td><h3>Phone</h3></td></tr>";
                  
             $i=1;
            while ($row = mysql_fetch_assoc($query_run )) {
               $Name=$row['branch_name'];
               
                $Address=$row['address'];
                $Phone=$row['phone'];
                echo "<tr>
            	<td>$i</td>
                 <td>$Name</td>
            	
            	<td>$Address</td>
            	<td>$Phone</td>
            </tr>";
                $i++;
              
            }
            }
             
            else
                {
                echo"<h3>No branch exist here</h3>";
                }  
          
         
         }
          else
        {
      
        ?>
        
         <form method="post">
        <table>
            <tr>
                <td colspan="3">
                    <h2 align="center">Branch Location</h2>
                </td>
            </tr>
            <tr>
                <td>Area(division)</td>
                
                <td><input type="text" name="area" class="textfield"/></td>
                
            </tr>
         
                
              <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Search" />
                </td>
            </tr>
        </table>
         </form>
        <?php }?>
    </div>
</div>

          

		
