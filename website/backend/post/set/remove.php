<?php 


require getcwd().'/../../lib/h.php';

if( isset( $_POST["id"] ) && isset( $_POST["authorId"] ) ){

	$id = $_POST["id"];
	$authorId = $_POST["authorId"];

	$sql = "DELETE FROM `post` ";
	$sql .= "WHERE id = ".$id.";";
	sql_set_query( $sql );
	
	$sql = "UPDATE `author` ";
	$sql .= "SET rejectedPosts = rejectedPosts + 1 "; 
	$sql .= "WHERE authorId = ".$authorId.";";

	jr( sql_set_query( $sql ) );
}
else
	jr("Missing authorId and/or id params.");

?>