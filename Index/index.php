<?php  
   $pageTitle = 'Home';
   include '../Header and Footer/Project1Header.php';
?>

	<?php
		include "../Header and Footer/Project1Nav.php";
	?>
	<div class="container-fluid">
	<h1 class="homepage">Welcome to Ingredients For You!</h1>
	<p class="homepage">We offer the freshest ingredients for your gourmet cooking. Sourced from small farms and prepared in store, our ingredients can't be beat!</p>
	</div>
	<div class="row homepage homepage-images">
	<div class="col-md-4">
		<a href="../Ingredient Pages/Lemongrass.php"><div class="jumbotron lemongrass-image"><h1>Lemongrass</h1></div></a>
	</div>
	<div class="col-md-4"><a href="../Ingredient Pages/Wasabi.php"><div class="jumbotron wasabi-image"><h1>Wasabi</h1></div></a></div>
	<div class="col-md-4"><a href="../Ingredient Pages/Capers.php"><div class="jumbotron capers-image"><h1>Capers</h1></div></a></div>
	</div>
	<?php
		include "../Header and Footer/Project1Footer.php";
	?>
