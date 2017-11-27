<?php 


require getcwd().'/../../lib/h.php';

if( isset( $_POST["authorId"] ) ){

	$authorId = $_POST["authorId"];
	$week = time() + (7 * 24 * 60 * 60);
	$date = date("Y-m-d", $time);

	$sql = "UPDATE `author` ";
	$sql .= "SET rejectedPosts = 0, unban = '".$date."' ";
	$sql .= "WHERE authorId = ".$authorId.";";
	
	jr( sql_set_query( $sql ) );
}
else
	jr("Missing authorId params.");

?>
