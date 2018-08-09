<!DOCTYPE html>
<html>
<head>

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>


<div class="container">
	<?php if($res!=false){ ?>
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">Invoice No # <?php echo $res['Invoice_Id']; ?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					<?php echo $res['first_name']." ".$res['last_name']; ?><br>
    					<?php echo $res['address']; ?><br>
    					<?php echo $res['city']; ?><br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    					Etaleem<br>
    					House No#123<br>
    					Hyderabad, Pakistan<br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					Easypaisa/Mobicash<br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					<?php echo $res['Date']; ?><br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Course Name</strong></td>
        							<td><strong>Tutor</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<tr>
    								<td><?php echo $res['dir_name']; ?></td>
    								<td class="text-left"><?php echo $res['first_name'];?></td>
    								<td class="text-center"><?php echo $res['price']." PKR";?></td>
    								<td class="text-right"><?php echo $res['price']." PKR";?></td>
    							</tr>
                            	
    							
								<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-right"><?php echo $res['price']." PKR";?></td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <?php } else {?>
    	<br>
    	<div class="row">
	    	<div class="col-md-12">
	    		<div class="panel panel-default">
	    			<div class="panel-heading"><h3></h3></div>
	    			<div class="panel-body">
	    				Sorry You are Not Authorized To Access This Page.
	    			</div>
	    		</div>
	    	</div>
	    </div>
    
	<?php } ?>
</div>

</body>
</html>