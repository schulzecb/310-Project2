<?php  
   $pageTitle = 'Sign In';
   include '../Header and Footer/Project1Header.php';
   include "../Header and Footer/Project1Nav.php";
   include "./Session.php";
?>

<div class="container-fluid wasabi-container">
	<div class="col-md-2 hidden-sm hidden-xs sidebar"></div>
	<div class="col-md-8 content">
		<?php
			if (!isset($_SESSION["username"])){
				echo '<h2>Sign in</h2>';
				echo '<form action="Login.php" method="post">';
				echo '	<div class="form-group">';
				echo '		<input type="text" class="form-control" placeholder="Username" aria-describedby="username">';
				echo '	</div>';
				echo '	<div class="form-group">';
				echo '		<input type="password" class="form-control" placeholder="Password" aria-describedby="pass">';
				echo '	</div>';
				echo '	<button class="btn btn-default" role="button" type="submit">Sign in</button>';
				echo '</form>';
			}
			else {
				echo '<p>You are signed in as $_SESSION["username"].</p>';
				header('Location: $_SESSION["lastpage]');
			}
		?>
	</div>
	<div class="col md-2 hidden-sm hidden-xs sidebar"></div>
</div>
<?php
	include "../Header and Footer/Project1Footer.php";
?>


