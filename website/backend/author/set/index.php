<?php 


require getcwd().'/../../lib/h.php';

if( isset( $_POST["authorId"] ) ){

	$authorId = $_POST["authorId"];

	$sql = "INSERT IGNORE INTO `author` ";
	$sql .= "(`authorId`) VALUES (".$authorId.");";
	
	jr( sql_set_query( $sql ) );
}
else
	jr("Missing authorId params.");

?>
