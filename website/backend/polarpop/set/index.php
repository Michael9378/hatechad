<?php 


require getcwd().'/../../lib/h.php';

$sql = "UPDATE `polarPopCount` ";
$sql .= "SET value = value + 1;";
	
jr( sql_set_query( $sql ) );

?>
