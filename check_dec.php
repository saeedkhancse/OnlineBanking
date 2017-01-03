<?php include 'htmlHeader1.php'; ?>

<div id="container">
    <?php include 'Header.php'; ?>
    <div id="content_main">

        <?php
        if (isset($_POST['acc_no'])) {

            include 'includes/db_con.php';
            $Account = $_POST['acc_no'];


            $query = "SELECT * FROM`user_info` WHERE uname='" . $Account . "'";
            $query_run = mysql_query($query);

            if (mysql_num_rows($query_run)==1) {
                echo "<table border=1>";
                echo "<tr><td>Account Number</td><td>Balance</td></tr>";


                while ($row = mysql_fetch_assoc($query_run)) {
                    $Account = $row['uname'];

                    $Balance = $row['balance'];

                    echo "<tr>
            	
                 <td>$Account</td>
            	
            	<td>$Balance</td>
            	
            </tr>";
                   
                    
                }
            } else {
                echo"<h3>No Account exist here</h3>";
            }
        } else {
            ?> 

            <form method="post">
                <table>
                    <tr>
                        <td colspan="3">
                            <h2 align="center">Balance Identification</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>Account</td>

                        <td><input type="text" name="acc_no" class="textfield"/></td>

                    </tr>


                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" value="Search" />
                        </td>
                    </tr>
                </table>
            </form>
        <?php } ?>
    </div>
</div>




