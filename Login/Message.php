<div class="commenting">
<?php 
include 'commentTable.php';
$ct = new commentTable();

function setupConnection() {
	try {
		$dbh = new PDO ( "sqlite:./comments.db" );
		return $dbh;
	} catch ( PDOException $e ) {
		echo '<pre class="bg-danger">';
		echo 'Connection failed (Help!): ' . $e->getMessage ();
		echo '</pre>';
		return FALSE;
	}
}

function dropTableByName($tname) {
	global $dbh;
	$sql = "DROP TABLE IF EXISTS $tname";
	$status = $dbh->exec ( $sql );
	if ($status === FALSE) {
		echo '<pre class="bg-danger">';
		print_r ( $dbh->errorInfo () );
		echo '</pre>';
	} 
}


function createTableGeneric($sql) {
	global $dbh;
	$status = $dbh->exec ( $sql );
	if ($status === FALSE) {
		echo '<pre class="bg-danger">';
		print_r ( $dbh->errorInfo () );
		echo '</pre>';
	} 
}

function createTable() {
global $dbh;
	$sql = "CREATE TABLE comments(
                    comments_id INTEGER PRIMARY KEY ASC,
                            comment varchar(50), 
                            uname varchar(20), 
                            ingred varchar(20), 
			   FOREIGN KEY (comments_id) )";
		$status = $dbh->exec ( $sql );
	if ($status === FALSE) {
		echo '<pre class="bg-danger">';
		print_r ( $dbh->errorInfo () );
		echo '</pre>';
	} 
}

if (!$dbh = setupConnection()) { die; }
dropTableByName("comments");
createTable();
$ct->InsertComment("hello", "fds", "fds", $dbh);
//$albums = $ct->Ptable("comment", 25, 0, $dbh);


if ($_SESSION['userName'] == "Guest") : ?>
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
                                    if ($content["message"] != ""){
                                            echo '<li class="list-group-item comment"><span class="username">' . $content["userName"] . '</span> <span class="message"><br><hr>' . $content["message"] . '</span></li>';
                                            }
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
                                    if ($content["message"] != ""){
					echo '<li class="list-group-item comment"><span class="username">' . $content["userName"] . '</span> <span class="message"><br><hr>' . $content["message"] . '</span></li>';
					}
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
                                    if ($content["message"] != ""){
					echo '<li class="list-group-item comment"><span class="username">' . $content["userName"] . '</span> <span class="message"><br><hr>' . $content["message"] . '</span></li>';
					}
				}
                }
                    
                    
		?>
	</ul>
	<form action="#" method="post">
		<textarea class="form-control" rows="3" placeholder="Write your comment..." name="message"></textarea>
		<?php echo '<button class="btn btn-default" role="button" type="submit" name="submit">Submit</button><span class="signed-in">Signed in as: ' . $_SESSION['userName'] . '</span>' ?>
	</form>
<?php 




endif; ?>
</div>
