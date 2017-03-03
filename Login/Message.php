

<!--If signed in-->
<hr>
<h3>Comments</h3>
<ul class="list-group">
	<li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>
    <li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>

</ul>

<p><a href="../Login/Login.php">Sign in</a> to comment</p>
<form action="Message.php" method="post">
	<textarea class="form-control" rows="3" placeholder="Write your comment..."></textarea>
	<button class="btn btn-default" role="button" type="submit">Submit</button><span class="signed-in">Signed in as: username</span>
</form>