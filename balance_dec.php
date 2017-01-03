<?php include 'htmlHeader.php';?>

<div id="container">
    <?php include 'Header.php'; ?>
    <div id="content_main">
    	<?php

    		if(isset($_POST['acc_no']))
    		{
    			include 'includes/db_con.php';
    			$acc_no=$_POST['acc_no'];
    			$amount=$_POST['amount'];
    			//print_r($_POST);
    			
    			
    				
    				$update1="UPDATE user_info SET balance=balance-".$amount." WHERE uname=".$acc_no." and balance>500";
    				//echo $update1;
					if(mysql_query($update1))
					{
    				
    				echo "Balance Transferred Successfully";    				
    			}
				else{echo "Balance nai";}
    		}
    		else
    		{
    	?>
        
        
	
		<p>
			<form action="" method="post" id="transfer">
				<label>Account No.</label><br>
				<input type="text" id="email"><span class='status'></span><br>
				<input type="hidden" name='to_id' id='to_id'/>
				<label>Amount:</label><br>
				<input type="text" name="amount"><br>
				
				<input type="submit" value="Reduction Money" id="t" disable>
			</form>
        </p>
        <?php }?>
    </div>
    <?php include 'rightSidebar.php'; ?>
</div>
<?php include 'Footer.php'; ?>
