<?php

 error_reporting('E_ALL ^ E_NOTICE');
 
 if(isset($_GET['year']) && !empty($_GET['year']) &&
 isset($_GET['week']) && !empty($_GET['week']) &&
 isset($_GET['service']) && !empty($_GET['service']))
 {
 	include 'ctl-db_connection.php';
 	 
 	$CRLF = "\r\n";
 		
 	file_put_contents("..\..\logs\methode.log",
 	$CRLF . "------------------ New form read ----------" , FILE_APPEND);
 		
 	$result = 0;

 	$find_record_query="select record.value, concat('r_', what, '_', who) from record
			inner join nkozi.when on record.when = nkozi.when.id
			where nkozi.when.value = " . $_GET['week'] . " and nkozi.when.year = " . $_GET['year'] . " and record.where = " . $_GET['service'] . "
			and record.value is not null;";
 	$rst_query=mysqli_query($connection, $find_record_query);
 	if (!$rst_query) {
 		$mysql_error = "Query failed: " . mysqli_error($connection);
 		$er.=$mysql_error;
 		//return false;
 	}
 	else {
 		$result = 1;
 		$er="Query ok";
 	}
 	file_put_contents("..\..\logs\methode.log",
 	$CRLF .$find_record_query, FILE_APPEND);

 	$arrRows = array();
 	while($row = mysqli_fetch_row($rst_query)){
 		$arrRows[] = $row;
 	}

 	mysqli_close($connection);
 }
 else {
 	$result = false;
 	$arrRows = array();
 	$er = "Year/week/service are missing";
 }
 
echo json_encode(array('result' => $result, 'msg' => $er, 'values' => $arrRows));

?>