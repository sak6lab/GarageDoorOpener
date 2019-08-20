<?php
	if(isset($_GET['door1'])) {
		error_reporting(E_ALL);
		exec('gpio write 7 0');
		usleep(1000000);
		exec('gpio write 7 1');
		header('Location: http://'.$_SERVER['HTTP_HOST']);
		die();
	}
	elseif(isset($_GET['door2'])) {
		error_reporting(E_ALL);
		exec('gpio write 25 0');
		usleep(1000000);
		exec('gpio write 25 1');
		header('Location: http://'.$_SERVER['HTTP_HOST']);
		die();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Garage Opener</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<meta name="apple-mobile-web-app-capable" content="yes">	
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
		<div class='awrap'>
      		<button class='opener-button' onClick='location.href="?door1=1"'>Garage Door 1</button>
    		<button class='opener-button' onClick='location.href="?door2=1"'>Garage Door 2</button>
		</div>
	</body>
</html>

