

<!--If signed in-->
<hr>
<h3>Comments</h3>
<ul class="list-group">
	<li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>
        <li class="list-group-item comment"><span class="username">Username</span> <span class="message"><br><hr>Message here</span></li>

</ul>

<?php if (!isset ($_SESSION['username'])) : ?>
    <div class="content-links"><p><a href="../Login/Login.php">Sign in</a> to comment</p></div>
<?php else : ?>
    <form action="Message.php" method="post">
            <textarea class="form-control" rows="3" placeholder="Write your comment..."></textarea>
            <!-- Increment number of comments -->
            <?php $wasabiComments++; ?>
            <button class="btn btn-default" role="button" type="submit">Submit</button><span class="signed-in">Signed in as: <?php echo $_SESSION['username']; ?></span>
    </form>
<?php endif; ?>
