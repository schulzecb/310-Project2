<?php

class Database extends PDO {
	public function __construct() {
		parent::__construct ( "sqlite:" . __DIR__ . "/../Index/ingredients.db" );
	}
	function getNumberOfIngredients() {
		$ing_num = $this->query ( "SELECT count(*)  FROM ingredient" );
		return $ing_num->fetchColumn ();
	}
	/** 
	 * Functions used by the select page to sort ingredients 
	 */
	function getIngredients() {
                $sql = "SELECT * FROM ingredient";
  		return $this->query($sql);
		
	}
	/**
	 * Functions needed for the search example *
	 */
	function getImage($ing_name) {
		
		$sql = "SELECT image FROM ingredient WHERE ingredient_name == '$name'";
		$result = $this->query ( $sql );
		return $result->fetchColumn ();
	}
	
	function retrieveIngredient($name) {
	
                $sql = "SELECT * FROM ingredient WHERE ingredient_name == '$name'";
                $result = $this->query( $sql );
                return $result->fetch();
	}
	
	function retrieveComments($ing_id) {
	
                $sql = "SELECT * FROM comments WHERE ingredient_id = '$ing_id'";
                $result = $this->query( $sql );
                
                $comments = array();
                foreach($result as $row) {
                    $comments[] = Comment::getCommentFromRow( $row );
                }
                
                return $comments;
	}
	
	function getNextCommentID() {
                $sql = "SELECT count(*) FROM comments";
                $result = $this->query($sql);
                return $result->fetchColumn() + 1;
	}
	
	function insertComment($newComment) {
                $sql = "INSERT INTO comments (comment_text, user, timestamp, ip_addr, ingredient_id)
                        VALUES(:text, :user, :time, :ip, :ing_id)";
                $stm = $this->prepare( $sql );
                return $stm->execute( array (
                                        ":text" => $newComment->comment_text,
                                        ":user" => $newComment->user,
                                        ":time" => $newComment->timestamp,
                                        ":ip" => $newComment->ip_addr,
                                        ":ing_id" => $newComment->ingredient_id
                ) );
	
	
	}
	
	
}
