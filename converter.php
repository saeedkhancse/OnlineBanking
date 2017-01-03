<?php include 'htmlHeader.php';?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<style>
	#curr_calc {
background-color: #efefef;
}
#curr_calc {
height: auto;
padding-top: 15px;
padding-left: 8px;
padding-right: 8px;
padding-bottom: 15px;
font-weight: bold;
font-weight: normal;
font-size: 12px;
background-color: #fff;

}
.curr_block
{
float:left;
}
select
{
width:140px;
}
#result
{
display:none;
font-weight:bold;
font-size:16px;
}

</style>
<script type="text/javascript">
	$(function() {
		$('.convert_btn').click(function(){
			$('#result').slideDown("slow");
		});
	});
</script>
<div id="container">
    <?php include 'Header.php'; ?>
    <div id="content_main">
        <h3>Currency Converter</h3>
        <!-Currency Converter widget - HTML code - fx-rates.net --><div  style="width:626px; background-color: #fff;border:2px solid #888;text-align:center;padding:0px;margin:0px"><div style="margin:0px; padding: 3px 0px 2px 0px;text-align:center;background-color:#ccc;border:1px solid #888;width:625;"><a title="Currency Converter" class="HSlabel" style="text-weight:bold;text-decoration:none;color:#000000;" href="http://fx-rate.net/"><b>Currency Converter</b></a></div><script type="text/javascript" src="http://fx-rate.net/converter.php?size=short&layout=horizontal"></script></div><!-end of code-->
	
		
    
		
    </div>
    <?php include 'rightSidebar.php'; ?>
</div>
<?php include 'Footer.php'; ?>
