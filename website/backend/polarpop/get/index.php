<?php 


require getcwd().'/../../lib/h.php';

$sql = "SELECT * ";
$sql .= "FROM `polarPopCount`;";

jr( sql_get_query( $sql ) );

?>
