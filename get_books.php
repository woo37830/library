<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	//$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	//$offset = ($page-1)*$rows;
	$result = array();

	include 'conn.php';

	//$rs = mysql_query("select count(*) from books");
	//$row = mysql_fetch_row($rs);
	//$result["iTotalRecords"] = $row[0];
	//$rs = mysql_query("select * from books limit $offset,$rows");
	$rs = mysql_query("select * from books ");

	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["data"] = $items;
        header("Content-type: application/json");
        header("Cache-Control: no-cache, must-revalidate");

	echo json_encode($result);

?>
