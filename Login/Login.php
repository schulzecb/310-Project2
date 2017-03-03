<!--If signed in-->
<hr>
<h3>Comments</h3>
<ul class="list-group">
  <li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>
    <li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>
	<li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>
    <li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>
	<li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>
    <li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>

</ul>
<form action="Message.php" method="post">
	<textarea class="form-control" rows="3" placeholder="Write your comment..."></textarea>
	<button class="btn btn-default" role="button" type="submit">Submit</button><span class="signed-in">Signed in as: username</span>
</form>

<!--If not signed in -->
<h3>Sign in</h3>
<form action="Login.php" method="post">
<div class="form-group">
  <input type="text" class="form-control" placeholder="Username" aria-describedby="username">
</div>
<div class="form-group">
  <input type="password" class="form-control" placeholder="Password" aria-describedby="pass">
</div>
<button class="btn btn-default" role="button" type="submit">Sign in</button>
</form>
