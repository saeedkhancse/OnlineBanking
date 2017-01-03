<?php include 'htmlHeader.php';?>
<div id="container">
    <?php include 'Header.php'; ?>
    <div id="content_main">
        <?php if(isset($_POST['logged'])&&$_POST['logged']=="true"){
            include "includes/db_con.php";

            $acc_no=$_POST['acc_no'];
            $password=$_POST['pass'];

            $sql="SELECT * from user_info where uname='".$acc_no."' AND password='".md5($password)."'";
            $query=mysql_query($sql);
            if(mysql_num_rows($query)==1)
            {
                echo "<h3>You are successfully Logged In</h3>";
                while($a=mysql_fetch_array($query))
                {
                    $_SESSION['id']=$a['id'];
                    
                }
            }
            else
            {
                echo "<h3>Wrong Username and password</h3>";
            }
        }
        else{
        ?>
        <form method="post">
            <input type="hidden" name="logged" value="true">
        <table>
            <tr>
                <td>Account No.</td>
                <td><input type="text" name="acc_no" class="textfield"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" class="textfield"/></td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Log In" />
                </td>
            </tr>
        </table>
        </form>
        <?php }?>
    </div>
</div>
<? include 'Footer.php'; ?>