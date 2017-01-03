<form enctype="multipart/form-data" action="events.php" method="Post">

    <table>




        <tr>
            <td>Type:</td>
            <td><input type="text" name="type" /></td>
        </tr>

        <tr>
            <td>Description:</td>
            <td><textarea name="description" cols="50" rows="3"></textarea></td>
        </tr>


        <tr>
            <td colspan="2" align="right"><input type="submit" value="submit" name="submit"/></td>
        </tr>
    </table> 
</form>




<?php
if (isset($_POST['type'])
        && isset($_POST['description'])
) {
    //This is the directory where images will be saved 
    //This gets all the other information from the form 

    $Type = $_POST['type'];
    $Description = $_POST['description'];




    // Connects to your Database 
    mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("bank_db") or die(mysql_error());

    //Writes the information to the database 
    $test = mysql_query("INSERT INTO `events` VALUES ('', '$Type', '$Description')");
    if ($test) {
        echo "<h3>Successfully Registered</h3>";
    } else {
        echo "<h3>Something went wrong</h3>";
    }




//Writes the photo to the server 
}
?> 