<?php

// Connects to your Database 
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("bank_db") or die(mysql_error());



//Retrieves data from MySQL 
$data = mysql_query("SELECT * FROM events ") or die(mysql_error());

echo "<table border='1'>
<tr>

</tr>";
//Puts it into an array 
while ($info = mysql_fetch_array($data)) {
    //Outputs the image and other data
    echo "<tr>";

    Echo "<td>" . $info['type'] . "<td>";
    Echo " <td>" . $info['description'] . "</td> ";
    echo "</tr>";
}
echo "</table>";
?> 