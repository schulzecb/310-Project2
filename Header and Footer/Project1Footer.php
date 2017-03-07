<div class="footer">
<p><?php 
    if (isset($_SESSION["username"])){
        echo 'Signed in as <a href="../Login/Login.php">' . $_SESSION["username"] . '</a> | ';
    }
    else {
        echo '<a href="../Login/Login.php">Sign in</a> | ';
    }
?> 

This site is part of a CSU <a href="http://cs.colostate.edu/~ct310">CT 310</a> Course Project. </p>
</div>

</body>
</html>
