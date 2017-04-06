 <?php
 require_once ("commentObj.php");

// sql to create table
/*
$sql = "CREATE TABLE comments (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Comment VARCHAR(50) NOT NULL,
User VARCHAR(30) NOT NULL,
Page VARCHAR(20) NOT NULL,
reg_date TIMESTAMP
)";


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
*/class commentTable extends PDO {
	public function __construct() {
		parent::__construct ( "sqlite:" . __DIR__ . "/./comments.db" );
	}



function InsertComment($C, $U, $I, $dbh) {
    
    $sql_album = "INSERT INTO comments (comment, UName, Ing)  VALUES ($C, $U, $I)";
    $status = $dbh->exec ( $sql_album );								 
    }
    
function Ptable($field, $num_returned = 25, $offset = 0, $dbh) {
        $sth = $dbh->prepare("SELECT comment FROM comments");
        $sth->execute();
	$result = $sth->fetchColumn();	
	
	echo ($result);
		/*
   		$sql = "SELECT comment, UName, Ing AS artist 
		        FROM comment
	           ORDER BY $field ASC LIMIT $num_returned OFFSET $offset";
                $result = $this->query ( $sql );
		//$status = $dbh->exec ( $sql );
		if ($result === FALSE) {
			// Only doing this for class. Would never do this in real life
			echo '<pre class="bg-danger">';
			print_r ( $this->errorInfo () );
			echo '</pre>';
			return array ();
		}
		
		$albums = array ();
		foreach ( $result as $row ) {
		
			$albums [] = commentObj::getComments ( $row );
		}
		return $albums;
   
   */
   
    }

}
