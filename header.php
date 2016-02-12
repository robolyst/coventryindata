<html>
	<head>
		<title>Coventry In Data</title>

		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" type="text/css" href="style.css">

		<link rel="icon" type="image/png" href="images/favicon.png">
	</head>

	<?php if(isset($BODYCLASS)): ?>
		<body class="<?php echo $BODYCLASS; ?>">
	<?php else: ?>
		<body>
	<?php endif; ?>

		<!--Import jQuery before other things-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>


		<div id="header">
			<div class="container">
				<a href="index.php"><div class="logo"></div></a>
				<!-- <div class="subheading">Use data to see what<br>makes our city tick.</div> -->
				<div class="subheading">Dig into the numbers and <br>find out what makes our city tick!</div>

				<div id="menu">
					<a href="index.php">Home</a>
					<a class="icon" href="http://www.twitter.com/CoventryInData" target="_blank"><i class="twitter"></i></a>
				</div>
			</div>
		</div>