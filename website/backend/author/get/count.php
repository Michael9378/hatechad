<?php 


require getcwd().'/../../lib/h.php';

$sql = "SELECT COUNT(*) ";
$sql .= "FROM `author`;";

jr( sql_get_query( $sql ) );

?>
