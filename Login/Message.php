<div class="commenting">
<?php if (!isset($_SESSION['userName']) || ($_SESSION['userName'] == "Guest")) : ?>
	<p><a href="../Login/Login.php">Sign in</a> to comment</p>
<?php else: ?>
	<hr>
	<h3>Comments</h3>
	<ul class="list-group">
		<?php 
			if ($pageTitle == "Wasabi"){
				if (isset($_POST['submit'])){
					$content = array(
						"userName" => $_SESSION['userName'],
						"message" => filter_var($_POST['message'], FILTER_SANITIZE_STRING),
					);
					$_SESSION["wasabi-messages"][] = $content;
				}
				foreach ($_SESSION["wasabi-messages"] as $content){
					echo '<li class="list-group-item comment"><span class="username">' . $content["userName"] . '</span> <span class="message"><br><hr>' . $content["message"] . '</span></li>';
				}
			}
			elseif ($pageTitle == "Lemongrass"){
				if (isset($_POST['submit'])){
					$content = array(
						"userName" => $_SESSION['userName'],
						"message" => filter_var($_POST['message'], FILTER_SANITIZE_STRING),
					);
					$_SESSION["lemongrass-messages"][] = $content;
				}
				foreach ($_SESSION["lemongrass-messages"] as $content){
					echo '<li class="list-group-item comment"><span class="username">' . $content["userName"] . '</span> <span class="message"><br><hr>' . $content["message"] . '</span></li>';
				}
			}
			else{
				if (isset($_POST['submit'])){
					$content = array(
						"userName" => $_SESSION['userName'],
						"message" => filter_var($_POST['message'], FILTER_SANITIZE_STRING),
					);
					$_SESSION["capers-messages"][] = $content;
				}
				foreach ($_SESSION["capers-messages"] as $content){
					echo '<li class="list-group-item comment"><span class="username">' . $content["userName"] . '</span> <span class="message"><br><hr>' . $content["message"] . '</span></li>';
				}
			}
		?>
	</ul>
	<form action="#" method="post">
		<textarea class="form-control" rows="3" placeholder="Write your comment..." name="message"></textarea>
		<?php echo '<button class="btn btn-default" role="button" type="submit" name="submit">Submit</button><span class="signed-in">Signed in as: ' . $_SESSION['userName'] . '</span>' ?>
	</form>
<?php endif; ?>
</div>
