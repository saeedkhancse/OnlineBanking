    <?php  
     mysql_connect("localhost", "root", "") or die(mysql_error()) ; 
     mysql_select_db("bank_db") or die(mysql_error()) ; 
	 $ros=mysql_query("select * from downloads" );
	 echo "<table>";
	 while($row=mysql_fetch_array($ros))
	 {
	 echo "<tr>";
	 echo "<td>";
	 echo  $row["file_name"]; 
         

         echo '>>>>';
         
         echo $row["file"];
	 echo "</td>";
	 echo "<td>";?>
	 <a href="<?php echo "upload/".$row["file"];?>">Download</a><?php echo "</td>";
	 
	 echo "</tr>";
	 
	 }
	 echo "</table>";
         
    ?>  