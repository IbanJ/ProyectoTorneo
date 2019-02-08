<?php

?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login, Sign up Header</title>

	<link rel="stylesheet" href="css/header-login-signup.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>

<header class="header-login-signup">

	<div class="header-limiter">

		<h1><a href="#">Dragonball<span>FIGHTERZ</span></a></h1>

		<form method="post" action="#">
			<input type="search" placeholder="Search!" name="search">
		</form>

		<ul>
			<li><a href="login.PHP">Login</a></li>
			<li><a href="register.php">Sign up</a></li>
		</ul>

	</div>

</header>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

	$(document).ready(function() {

		$('.header-login-signup form').on('click', function(e) {

			// If the form (which is turned into the search button) was
			// clicked directly, toggle the visibility of the search box.

			if(e.target == this) {
				$(this).find('input').toggle();
			}

		});
	});

</script>

<!-- The content of your page would go here. -->

</body>

</html>
