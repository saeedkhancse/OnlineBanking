<?php include 'htmlHeader.php';?>
<link href="css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
  
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script type="text/javascript">
  $(function() {
   $( "#accordion" ).accordion({
      heightStyle: "content",
	  
    });
	$( "#accordion1" ).accordion({
      heightStyle: "content"
    });
	$( "#accordion2" ).accordion({
      heightStyle: "content"
    });
	$( "#accordion3" ).accordion({
      heightStyle: "content"
    });
  });
  </script>
<style>
	.cardHolder td
	{
		text-align:center;
		padding:0px 10px;
	}
	.cardHolder
	{
		margin-top:20px !important;
		margin-bottom:0px !important;
	}
</style>
<div id="container">
    <?php include 'Header.php'; ?>
	
    <div id="content_main">
        <h3>Credit and Debit Cards</h3>
        
	
		<p>
		<div id="accordion">
		  <h3>Credit Cards</h3>
		  <div>
			<p>
			<div id="accordion1">
				 <h3>Classic Credit Card</h3>
				 <div>
					<p>
					<img src="images/classic.jpg" width="200">
					</p>
				 </div><h3>Gold Credit Card</h3>
				 <div>
					<p>
					<img src="images/gold.jpg" width="200">
					</p>
				 </div>
				 <h3>Platinum Credit Card</h3>
				 <div>
					<p>
					<img src="images/plat.jpg" width="200">
					</p>
				 </div>
			</div>
			</p>
		  </div>
		  <h3>Debit Cards</h3>
		  <div>
			<p>
			<div id="accordion2">
				 <h3>Cool Debit Card</h3>
				 <div>
					<p>
					<img src="images/cool.jpg" width="200">
					</p>
				 </div><h3>Visa Card</h3>
				 <div>
					<p>
					<img src="images/visa.jpg" width="200">
					</p>
				 </div>
				 <h3>Signature Card</h3>
				 <div>
					<p>
					<img src="images/sign.jpg" width="200">
					</p>
				 </div>
			</div>
			</p>
		  </div>
		  <h3>Prepaid card</h3>
		 <div>
			<p>
			<div id="accordion3">
				 <h3>Hajj Card</h3>
				 <div>
					<p>
					<img src="images/hajj.jpg" width="200">
					</p>
				 </div><h3>Travel Card</h3>
				 <div>
					<p>
					<img src="images/Travel-Card.jpg" width="200">
					</p>
				 </div>
				 <h3>Lifestyle Card</h3>
				 <div>
					<p>
					<img src="images/life.jpg" width="200">
					</p>
				 </div>
			</div>
			</p>
		  </div>
		  
		</div>
			
			
			
		</p>
    </div>
    <?php include 'rightSidebar.php'; ?>
</div>
<?php include 'Footer.php'; ?>
