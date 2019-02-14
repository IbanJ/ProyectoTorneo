<?php

?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Dragonball FIGHTERZ</title>

	<link rel="stylesheet" href="css/header-login-signup.css">
	<link rel="stylesheet" href="css/TablaJugadores.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>
<!--	
<p>Mister Fister</p>
				<p>Broly</p>
				<p>A nobody</p>
				<p>Vegito</p>
				<p>Sez</p>
				<p>Rose</p>
				<p>Eren Jaeger</p>
				<p>Goku</p>
		</div>
		<div class="jugadores-derecha">
				<p>Leopoldo IV</p>
				<p>Ravi</p>
				<p>Gogeta</p>
				<p>Another nobody</p>
				<p>Merchan</p>
				<p>Iban</p>
				<p>Zamasu</p>
				<p>Vegeta</p>
-->
<header class="header-login-signup">

	<div class="header-limiter">

		<h1><a href="Main.php">Dragonball<span>FIGHTERZ</span></a></h1>

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

<div class="borde">
		<div class="jugadores-izquierda">
				<p>1</p>
				<p>2</p>
				<p>3</p>
				<p>4</p>
				<p>5</p>
				<p>6</p>
				<p>7</p>
				<p>8</p>	
		</div>
		<div class="cuartos-iz">
				<p>1</p>
				<p>2</p>
				<p>3</p>
				<p>4</p>
				</div>
		<div class="jugadores-derecha">
				<p>9</p>
				<p>10</p>
				<p>11</p>
				<p>12</p>
				<p>13</p>
				<p>14</p>
				<p>15</p>
				<p>16</p>			
		</div>
		<div class="cuartos-der">
				<p>1</p>
				<p>2</p>
				<p>3</p>
				<p>4</p>
		</div>
</div>


</body>

</html>
