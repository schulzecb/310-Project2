<div class="commenting">
<?php if (!isset($_SESSION['userName']) || ($_SESSION['userName'] == "Guest")) : ?>
	<p><a href="../Login/Login.php">Sign in</a> to comment</p>
<?php else: ?>
	<hr>
	<h3>Comments</h3>
	<ul class="list-group">
		<?php 
			$page_comments = $db->retrieveComments($ingredient["ingredient_id"]);
			
			if (count($page_comments) <= 1) {
                            echo "No comments to show";
                        }
		?>
	</ul>
	<form action="#" method="post">
		<textarea class="form-control" rows="3" placeholder="Write your comment..." name="message"></textarea>
		<?php echo '<button class="btn btn-default" role="button" type="submit" name="submit">Submit</button><span class="signed-in">Signed in as: ' . $_SESSION['userName'] . '</span>' ?>
	</form>
<?php endif; ?>
</div>
