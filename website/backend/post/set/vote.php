<?php 


require getcwd().'/../../lib/h.php';

if( isset( $_POST["id"] ) && isset( $_POST["vote"] ) ){

	$id = $_POST["id"];
	$vote = $_POST["vote"];

	$sql = "UPDATE `post` ";
	$sql .= "SET votes = votes + ".$vote." ";
	$sql .= "WHERE id = ".$id.";";
	
	jr( sql_set_query( $sql ) );
}
else
	jr("Missing id and/or vote params.");

?>
