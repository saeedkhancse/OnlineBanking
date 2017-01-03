<form enctype="multipart/form-data" action="download_up.php" method="Post">

    <table>




        <tr>
            <td>File :</td>
            <td><input type="file" name="file" /></td>
        </tr>

        <tr>
            <td>File Name:</td>
            <td><textarea name="file_name" cols="50" rows="3"></textarea></td>
        </tr>
      

        <tr>
            <td colspan="2" align="right"><input type="submit" value="submit" name="submit"/></td>
        </tr>
    </table> 
</form>




<?php
if (isset($_POST['file_name'])
        && isset($_FILES['file']['name'])
       
) {
    //This is the directory where images will be saved 
    $target = "./upload/";
    $target = $target . $_FILES['file']['name'];

    //This gets all the other information from the form 

    $File_Name= $_POST['file_name'];

    $File = ($_FILES['file']['name']);

   
    // Connects to your Database 
    mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("bank_db") or die(mysql_error());

    //Writes the information to the database 
    mysql_query("INSERT INTO `downloads` VALUES ('', '$File', '$File_Name')");

//Writes the photo to the server 
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {

        //Tells you if its all ok 
        echo "The file " . basename($_FILES['file']['name']) . " has been uploaded, and your information has been added to the directory";
    } else {

        //Gives and error if its not 
        echo "Sorry, there was a problem uploading your file.";
    }
}
?> 