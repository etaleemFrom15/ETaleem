<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(isset($invoice_num)){
		
		$url=site_url("Payment_Controller/show_invoice/".$invoice_num);

		echo "Your Invoice Generated <a href='$url'>Click Here</a>";

	} ?>
</body>
</html>

