<?php include 'htmlHeader.php';?>
<div id="container">
    <?php include 'Header.php'; ?>
    <div id="content_main">
    	
        <h3>Payment:</h3>
        
	
		<p>
			<form method='post'>
				<label><br />
				Payment to:</label>
				<select name='company'>
                  <option value='Desco'>DESCO</option>
                  <option value='Desa'>DESA</option>
                  <option value='Qubee'>Qubee</option>
                  <option value='banglalion'>BanglaLion</option>
                </select>
			  <p>&nbsp;</p>
				<p>
				Acc no.:
				  <input type="text" name="acc_no" value="<?php echo $a[acc_no];?>">
				  <br>
				</p>
				<label>Amount:</label>
				<input type="text" name='amount' />
				<br>
				<br>
				
				<input type="submit" value="Pay Bill">
			</form>

        </p>
       
    </div>
    <?php include 'rightSidebar.php'; ?>
</div>
<?php include 'Footer.php'; ?>
