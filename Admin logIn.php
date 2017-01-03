<?php include 'htmlHeader.php'; ?>
<div id="container">
    <?php include 'Header.php'; ?>
    <div id="content_main">
        <?php
        if (isset($_POST['logged']) && $_POST['logged'] == "true") {
            include "includes/db_con.php";

            $user_id = $_POST['user_id'];
            $password = $_POST['password'];

            $sql = "SELECT * from admin_info where user_id='" . $user_id . "' AND password='" . ($password) . "'";
            $query = mysql_query($sql);
            if (mysql_num_rows($query) == 1) {

                echo "<h3>You are successfully Logged In</h3>";
                while ($a = mysql_fetch_array($query)) {
                    $_SESSION['user_id'] = $a['user_id'];
                }
            } else {
                echo "Wrong Username and password";
            }
        } else {
            ?>
            <form method="post">
                <input type="hidden" name="logged" value="true">
                <table>
                    <tr>
                        <td>User id</td>
                        <td><input type="text" name="user_id" class="textfield"/></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" class="textfield"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" value="Log In" />
                        </td>
                    </tr>
                </table>
            </form>
<?php } ?>


    </div>



</div>

<? include 'Footer.php'; ?>