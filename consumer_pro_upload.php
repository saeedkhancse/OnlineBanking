<form enctype="multipart/form-data" action="consumer_pro_up.php" method="Post">

    <table>




        <tr>
            <td>Photo:</td>
            <td><input type="file" name="photo" /></td>
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
if (isset($_POST['description'])
        && isset($_FILES['photo']['name'])
        
) {
    //This is the directory where images will be saved 
    $target = "./upload/";
    $target = $target . $_FILES['photo']['name'];

    //This gets all the other information from the form 

    $Description = $_POST['description'];

    $Photo = ($_FILES['photo']['name']);

    
    // Connects to your Database 
    mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("bank_db") or die(mysql_error());

    //Writes the information to the database 
    mysql_query("INSERT INTO `consumer_pro` VALUES ('', '$Photo', '$Description')");

//Writes the photo to the server 
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {

        //Tells you if its all ok 
        echo "The file " . basename($_FILES['photo']['name']) . " has been uploaded, and your information has been added to the directory";
    } else {

        //Gives and error if its not 
        echo "Sorry, there was a problem uploading your file.";
    }
}
?> 