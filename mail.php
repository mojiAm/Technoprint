<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Sending mail ...</title>
	<style type="text/css">
		body {
			background-color: #F4F4F4;
		}

		.ok {
			color:#23B3AB;
		}

		.err {
			color:#BD5B3D;
		}
	</style>
</head>
<body>
	<?php
		error_reporting(E_ALL ^ E_NOTICE);

		$admin = 'info@technoprints.ir';

		$name    = $_POST['name'];
		$email   = $_POST['email'];
		$subject = $_POST['subject'];
		$text    = $_POST['message'];

		if( strlen($name)>=3 && strlen($email)>=7 && strlen($text)>=10 ){
			if( @mail (
					$admin,
					"$subject",
					$text,
					"From:$name $email" )
			){
				echo '<script type="text/javascript">
						alert("پیام شما با موفقیت ارسال شد.");
					  </script>';

			}else{
				echo '<script type="text/javascript">
						alert("خطا! پیام شما ارسال نشد لطفا مجددا تلاش نمایید.");
					  </script>';
			}
		}else{
			echo '<script type="text/javascript">
					alert("خطا! لطفا فیلدها را چک نمایید و مجددا تلاش کنید.");
				  </script>';
		}
	?>
</body>
</html>