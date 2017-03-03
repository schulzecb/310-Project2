<?php
	include "Session.php";
?>


<hr>
<h3>Comments</h3>
<ul class="list-group">
	<li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>
    <li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>

</ul>

<?php
	if (!isset($_SESSION["username"])){
		echo '<p><a href="../Login/Login.php">Sign in</a> to comment</p>';
	} else {
		echo '<form action="Message.php" method="post">';
		echo '<textarea class="form-control" rows="3" placeholder="Write your comment..."></textarea>';
		echo '<button class="btn btn-default" role="button" type="submit">Submit</button><span class="signed-in">Signed in as: $_SESSION["username"]</span>';
		echo '</form>';
	}
?>