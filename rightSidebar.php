<div id="nav_main">
  
    <h4>Sub Menu</h4>
	<ul>

        <li><a href="consumer.php">Consumer Products</a></li>
		<li><a href="news.php">News & Events</a></li>
		
		<li><a href="download.php">Download forms</a></li>
		<li><a href="Cards.php">Cards</a></li>
		<?php if(isset($_SESSION['id'])){?>
		<li><a href="balance.php">Balance Transfer</a></li>
		<li><a href="complaint.php">Complaint Cell</a></li>
		
		<li><a href="payment.php">Bill Payment</a></li>
    </ul>
    <?php }?>
	<h4>CATEGORIES</h4>
   
	<ul><li><a href="#">CUSTOMER CARE</a></li>
      <li><img src="images/boys.jpg" width="88" height="88" /></li>
  </ul>
    <p>24x7 customer service all over the country. </p>
    
    </div>