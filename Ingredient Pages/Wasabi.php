<?php session_name("310proj1"); ?>
<?php session_start(); ?>

<?php  
   $pageTitle = 'Wasabi';
   include '../Header and Footer/Project1Header.php';
?>


	<?php
		include "../Header and Footer/Project1Nav.php";
	?>
	<div class="container-fluid wasabi-container">
	<div class="col-md-2 hidden-sm hidden-xs sidebar"></div>
	<div class="col-md-8 content">
		<div class="jumbotron wasabi-image"><h1>Wasabi</h1></div>
		<div class="ingredient-text">
                    <p>Wasabi - also known as Japanese horseradish - is a plant that grows naturally along stream beds in mountain river valleys in Japan. It is part of the <i>Brassicaceae</i> plant family, which also includes horseradish, mustard, and cabbages. Most people know and love wasabi for its intense and sinus-clearing spicy taste.</p>
                    <p>We get our wasabi from Japan's Izu peninsula, and we grind it into paste in-store! Having some sushi or another Asian dish for dinner? You won't want to skip the wasabi, trust us!</p><br>
                    <div class="credit">
                        <p>Photo credit: Sabigirl at English Wikipedia, <a href="https://commons.wikimedia.org/wiki/File%3AFresh_wasabi_rhizomes.jpg">via Wikimedia Commons</a></p>
                    </div>
                </div>
		<div class="image"></div>
            <?php 
                if (isset ($_SESSION['username'])) {
                    include "../Login/Message.php";
		}
		else {
                    echo "You must be signed in to view comments.";
		}
            ?>
	</div>
	<div class="col md-2 hidden-sm hidden-xs sidebar"></div>
	</div>
	<?php
		include "../Header and Footer/Project1Footer.php";
	?>
