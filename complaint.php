<?php include 'htmlHeader.php';?>
<style type="text/css">
    label.error{
        color:red;
        font-size: 12px;
        display:block;
    }
</style>

<div id="container">
    <?php include 'Header.php'; ?>
    <div id="content_main">
        
           <?php
        if(isset($_POST['acc_no']))
        {
            include 'includes/db_con.php';

            $acc_no=$_POST['acc_no'];
            $contact_no=$_POST['contact_no'];
            $email=$_POST['email'];
            $description=$_POST['description'];    

            $sql="INSERT into complain VALUES(NULL,"."'$acc_no','$contact_no','$email','$description')";

            $test=mysql_query($sql) or die(mysql_error());
            if($test)
            {
                echo "<h3>Successfully Delivered</h3>";
            }
            else
            {
                echo "<h3>Something went wrong</h3>";
            }
        }
        else
        {
        

    ?>
    
    

        <form method="post" id="register">
        <table>
            <tr>
                <td>Account No.</td>
                <td><input type="text" name="acc_no" class="textfield required"/></td>
            </tr>
            <tr>
                <td>Contact No.</td>
                <td><input type="text" name="contact_no" class="textfield required"/></td>
            </tr>
            
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" class="textfield required email"/></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="description" class="textfield required"/></td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
   
     <?php }?>
     </div>
</div>
<? include 'Footer.php'; ?>