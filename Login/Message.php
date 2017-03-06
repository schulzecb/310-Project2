<?php
	if (isset($_POST['submit'])){
		$msg = 
		$content = array(
			"username" => $_SESSION['username'],
			"message" => $_POST['message'],
			);
		$_SESSION['messages'][] = $content;
	}
?>

<?php if (!isset($_SESSION['username'])) : ?>
	<p><a href="../Login/Login.php">Sign in</a> to comment</p>
<?php else: ?>
	<hr>
<h3>Comments</h3>
<ul class="list-group">
	<?php 
		foreach ($_SESSION['messages'] as $content){
			echo '<li class="list-group-item comment"><span class="username">' . $content["username"] . '</span> <span class="message"><br><hr>' . $content["message"] . '</span></li>';
		}
	?>
</ul>
	<form action="#" method="post">
	<textarea class="form-control" rows="3" placeholder="Write your comment..." name="message"></textarea>
	<?php echo '<button class="btn btn-default" role="button" type="submit" name="submit">Submit</button><span class="signed-in">Signed in as: ' . $_SESSION['username'] . '</span>' ?>
	</form>
<?php endif; ?>