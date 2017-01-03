<?php
//If variables are set 
if (isset($_POST['submit']) && isset($_POST['acc_no'])) {

    //storing the values
    $acc_no = $_POST['acc_no'];

    //if values are not empty
    if(!empty($acc_no)) {
        //connect to the database
        $link = mysql_connect("localhost", "root", "") or die("Could not connect: " . mysql_error());
        //select database
        mysql_select_db("bank_db") or die(mysql_error());


        //Creating the Query
        $sql = "delete  from user_info where id = $acc_no;";
        //Running the Query
        $result = mysql_query($sql,$link);
        //Check if Query has run successfully
        if ($result) {
            echo "<h3>Thank you for Deleting !!</h3>";
        }
        //Printing the mysql error
        else {
            echo mysql_error();
        }
    } 
    else {
        echo "<h3>PLease enter the information Currectly</h3>";
    }
}
?>
<div  class="form" >
    <form action="del.php" method="POST">
        <div align="center"> 
            
            <p class="contact"><label for="acc_no"><h2>Account_id:</hh2></label>
                <input id="acc_no" name="acc_no" placeholder="Enter acc_no" required="" tabindex="1" type="text"></p><abbr></abbr>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Delete" type="submit">   
        </div>
    </form>

</div>
