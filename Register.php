
<style type="text/css">
    label.error{
        color:red;
        font-size: 12px;
        display:block;
    }
</style>

<div id="container">

    <div id="content_main">
        <?php
        if (isset($_POST['acc_no'])) {
            include 'includes/db_con.php';

            $acc_no = $_POST['acc_no'];
            $password = $_POST['pass'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $sql = "INSERT into user_info VALUES(NULL," . "'$acc_no','" . md5($password) . "','$email','$address',10000)";

            $test = mysql_query($sql) or die(mysql_error());
            if ($test) {
                echo "<h3>Successfully Registered</h3>";
            } else {
                echo "<h3>Something went wrong</h3>";
            }
        } else {
            ?>


            <form method="post" id="register">
                <table>
                    <tr>
                        <td>Account No.</td>
                        <td><input type="text" name="acc_no" class="textfield required"/></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" class="textfield required" id="pass"/></td>
                    </tr>
                    <tr>
                        <td>Confirm</td>
                        <td><input type="password" name="cpass" class="textfield" equalTo="#pass"/></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" class="textfield required email"/></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" class="textfield"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" value="Register" />
                        </td>
                    </tr>
                </table>
            </form>

        <?php } ?>
    </div>
</div>
