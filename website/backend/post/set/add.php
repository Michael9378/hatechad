<?php 


require getcwd().'/../../lib/h.php';

if( isset( $_POST["authorId"] ) && isset( $_POST["content"] ) ){

	$authorId = $_POST["authorId"];
	$content = $_POST["content"];
	$date = date("Y-m-d");

	$sql = "INSERT INTO `post` (`authorId`, `content`, `age`) ";
	$sql .= "VALUES(".$authorId.", '".$content."', '".$date."');";
	
	jr( sql_set_query( $sql ) );
}
else
	jr("Missing authorId and/or content params.");

?>