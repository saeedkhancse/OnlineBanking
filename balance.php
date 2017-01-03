<?php include 'htmlHeader.php';?>
<script type="text/javascript">
	$(document).ready(function(){
		 $("#email").blur(function() {
			var email=$(this).val();
			console.log(email);
			$('.status').html('<img src="images/ajax-loader.gif">Checking Availability...');
			$.ajax({
				type: 'post',
				url: "check.php",
				data: 'email='+email,
				dataType: 'json',
				cache: false,
				success : function(result){
					if(result=='N')
					{
						$('.status').html('<img src="images/cross.png"> User not available');
						$('input[type="submit"]').attr('disabled','disabled');
					}
					else
					{
						$('.status').html("<img src='images/tick.png'>You can Tranfer");
						
						$('#to_id').val(result.id);
						 $('input[type="submit"]').removeAttr('disabled');
					}
			  }
			});
			
		});
	});
</script>
<div id="container">
    <?php include 'Header.php'; ?>
    <div id="content_main">
    	<?php

    		if(isset($_POST['amount']))
    		{
    			include 'includes/db_con.php';
    			$to_id=$_POST['to_id'];
    			$amount=$_POST['amount'];
    			//print_r($_POST);
    			
    			$update="SELECT balance from user_info where id=".$_SESSION['id'];
    			$q=mysql_query($update);
    			while($a=mysql_fetch_array($q))
    			{
    				$balance=$a['balance'];
    			}
    			//echo "$balance";
    			if($balance<$amount)
    			{
    				echo "You do not have enough amount of Money";
    			}
    			else
    			{
    				$sql="INSERT into  transfer_balance values(NULL,".$_SESSION['id'].",$amount,$to_id,NULL)";
    				mysql_query($sql);
    				$update1="UPDATE user_info SET balance=balance-".$amount." WHERE id=".$_SESSION['id'];
    				//echo $update1;
    				mysql_query($update1);
    				$update1="UPDATE user_info SET balance=balance+".$amount." WHERE id=".$to_id;
    				//echo $update1;
    				mysql_query($update1);
    				
    				echo "Balance Transferred Successfully. Please go to your <a href='my-account.php'>ACCOUNT page</a> to watch your balance";    				
    			}
    		}
    		else
    		{
    	?>
        <h3>Balance Transfer</h3>
        
	
		<p>
			<form action="" method="post" id="transfer">
				<label>Transfer to: (Account No.)</label><br>
				<input type="text" id="email"><span class='status'></span><br>
				<input type="hidden" name='to_id' id='to_id'/>
				<label>Amount:</label><br>
				<input type="text" name="amount"><br>
				<label>Benificiary details:</label><br>
				<textarea></textarea><br>
				<input type="submit" value="Transfer Money" id="t" disable>
			</form>
        </p>
        <?php }?>
    </div>
    <?php include 'rightSidebar.php'; ?>
</div>
<?php include 'Footer.php'; ?>
