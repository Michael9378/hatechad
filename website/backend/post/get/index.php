<?php 


require getcwd().'/../../lib/h.php';

if( isset( $_POST["start_post"] ) ){

	$start_post = $_POST["start_post"];

	$filter = "all";
	$time = 0;
	$date = date("Y-m-d", $time);

	$sort = "new";
	$order = "ORDER BY age DESC ";


	if( isset( $_POST["filter"] ) )
		$filter = $_POST["filter"];

	if( isset( $_POST["sort"] ) )
		$sort = $_POST["sort"];

	// filter based on time frame
	switch($filter){
		case "day":
			$time = time() - (1 * 24 * 60 * 60);
			break;
		case "week":
			$time = time() - (7 * 24 * 60 * 60);
			break;
		case "month":
			$time = time() - (30 * 24 * 60 * 60);
			break;
	}

	$date = date("Y-m-d", $time);

	// sort
	switch($sort){
		case "old":
			$order = "ORDER BY age ASC ";
			break;
		case "high":
			$order = "ORDER BY votes DESC ";
			break;
	}

	$sql = "SELECT * ";
	$sql .= "FROM `post` ";
	$sql .= "WHERE age > '".$date."' ";
	$sql .= $order;
	$sql .= "LIMIT ".$start_post.", 50;";
	
	jr( sql_get_query( $sql ) );
}
else
	jr("Missing start_post params.");

?>
