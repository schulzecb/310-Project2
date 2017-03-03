<?php  
   $pageTitle = 'Sign In';
   include '../Header and Footer/Project1Header.php';
?>

	<?php
		include "../Header and Footer/Project1Nav.php";
	?>
	<div class="container-fluid wasabi-container">
	<div class="col-md-2 hidden-sm hidden-xs sidebar"></div>
	<div class="col-md-8 content">
<!--If not signed in -->
<h2>Sign in</h2>
<form action="Login.php" method="post">
<div class="form-group">
  <input type="text" class="form-control" placeholder="Username" aria-describedby="username">
</div>
<div class="form-group">
  <input type="password" class="form-control" placeholder="Password" aria-describedby="pass">
</div>
<button class="btn btn-default" role="button" type="submit">Sign in</button>
</form>
	</div>
	<div class="col md-2 hidden-sm hidden-xs sidebar"></div>
	</div>
	<?php
		include "../Header and Footer/Project1Footer.php";
	?>


