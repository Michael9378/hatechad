<?php 


require getcwd().'/../../lib/h.php';

if( isset( $_POST["authorId"] ) ){

	$authorId = $_POST["authorId"];

	$sql = "SELECT * ";
	$sql .= "FROM `author` ";
	$sql .= "WHERE authorId = ".$authorId.";";
	
	jr( sql_get_query( $sql ) );
}
else
	jr("Missing authorId params.");

?>
