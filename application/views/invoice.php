<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(isset($invoice_num)){
		if(isset($type)){

			$url=site_url("Payment_Controller/show_invoice/".$invoice_num."/invoice_online");
		}
		else{
			$url=site_url("Payment_Controller/show_invoice/".$invoice_num."/invoice");
		}

		echo "Your Invoice Generated <a href='$url'>Click Here</a>";

	} ?>

</body>
</html>

