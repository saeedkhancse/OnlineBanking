<?php include 'htmlHeader.php';?>

<div id="container">
   <?php include 'Header.php'; ?>
    <div id="content_main">
	
	
	       <?php
         
         if (isset($_POST['area']) ) 
         {
       
            include 'includes/db_con.php';
            $Area = $_POST['area'];
            
           
            $query = "SELECT id,atm_name,location FROM`atm` WHERE `area` LIKE'%".($Area)."%'";
            $query_run = mysql_query($query);
              
            if(mysql_num_rows($query_run)){
                  echo "<table style='width:120%;border-collapse:collapse;margin:30px;' border=5>";
                   echo "<tr><td><h3>Id</h3></td><td><h3>Atm Name</h3></td><td><h3>Location</h3></td></tr>";
                  
             $i=1;
            while ($row = mysql_fetch_assoc($query_run )) {
                $Name=$row['atm_name'];
                $Location=$row['location'];
               
                echo "<tr>
            	<td>$i</td>
                 <td>$Name</td>
            	<td>$Location</td>
            	
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
                <td colspan="2">
                    <h2 align="center">ATM Location</h2>                </td>
            </tr>
            <tr>
                <td>Area</td>
                <td><select class="textfield" name="area" id="district">
                  <option value='dhaka'>Dhaka</option>
                  <option value='rajshahi'>Rajshahi</option>
                  <option value='barisal'>Barisal</option>
                </select></td>
            </tr>
            
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Search" /> </td>
            </tr>
        </table>
    </form>
    <?php }?>
    </div>
</div>
