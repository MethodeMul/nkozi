<?php

error_reporting('E_ALL ^ E_NOTICE');

/*if(isset($_POST['submit']) && !empty($_POST['submit']))
 {*/
include 'ctl-db_connection.php';
 
$CRLF = "\r\n";
 
file_put_contents("..\..\logs\methode.log",
$CRLF . "------------------ New form submission ----------" , FILE_APPEND);
 
$result = 0;
foreach($_POST as $key => $value)
{
	file_put_contents("..\..\logs\methode.log",
	$CRLF. "Processing.. Element = ".$key." Value = " . $value, FILE_APPEND);
	if (strstr($key, 'r_'))
	{
		//We found a value entered in a table cell!!
		$arrElements = explode("_", str_replace('r_','',$key));
		//$arrElements[0] = what  $arrElements[1] = who
		$encoded_value = $value == "" ? 'NULL' : $value;
		//if($value == "") $encoded_value = 'NULL'; else $encoded_value = $value;
		$what = $arrElements[0];
		$who = $arrElements[1];
		$when = $_POST['year'] . "wk" . $_POST['week'];
		$where = $_POST['service'];

		$find_record_query="select record.id from record
			inner join nkozi.when on record.when = nkozi.when.id
			where record.what=".$what." AND record.who=".$who." AND 
			nkozi.when.value = " . $_POST['week'] . " and nkozi.when.year = " . $_POST['year'] . " and record.where = " . $_POST['service'] . ";";
		/*$find_record_query="select id from `nkozi`.`record` where
				what=".$what." AND who=".$who."
						AND `when`='".$when."' AND `where`='".$where."';";*/
		$rst_query=mysqli_query($connection, $find_record_query);
		if (!$rst_query) {
			$mysql_error = "Query failed: " . mysqli_error($connection);
			$er.=$mysql_error;
			$result = 0;
			//return false;
		}

		$row=mysqli_fetch_row($rst_query);

		file_put_contents("..\..\logs\methode.log",
		$CRLF .$find_record_query . $CRLF . " ID found: " . $row[0], FILE_APPEND);

		if($row>0) //It is an update
		{
			$er.= "Updating record";
			$update_query =  "UPDATE `nkozi`.`record`	SET ";
			$update_query .= " `value` = " 	. $encoded_value . ",";
			$update_query .= " `upd_date` = now()";
			$update_query .= " WHERE `id` =".$row[0].";";
				
			file_put_contents("..\..\logs\methode.log",
			$CRLF .$update_query, FILE_APPEND);
				
			$rst_query = mysqli_query($connection, $update_query);
			if (!$rst_query) {
				$mysql_error = "Query failed: " . mysqli_error($connection);
				$er.=$mysql_error;
				$result = 0;
				//return false;
			}
			else {
				$result = 1;
				header("refresh:1; url=vw-data_entry_OPD.php");
			}
		}
		elseif($encoded_value != 'NULL') { //It is a new record and it is not NULL
			// Insert values
			$er.= "Inserting record";
			
			$find_when_query="select id from nkozi.when where when.value = " . $_POST['week'] . " and when.year = " . $_POST['year'] . ";";
			$rst_query=mysqli_query($connection, $find_when_query);
			if (!$rst_query) {
				$mysql_error = "Query failed: " . mysqli_error($connection);
				file_put_contents("..\..\logs\methode.log",
			$CRLF ."Query failed: " . mysqli_error($connection), FILE_APPEND);
				$er.=$mysql_error;
				$result = 0;
				//return false;
			}
			$row=mysqli_fetch_row($rst_query);
			$when = $row[0];
			
			$insert_query="INSERT INTO `nkozi`.`record`
					(`value`, `what`, `who`, `when`, `where`, `upd_date`)
					VALUES 	(".$encoded_value.",".$what.",".$who.",'".$when."',".$where.", now())";
			$rst_query = mysqli_query($connection, $insert_query);
				
			file_put_contents("..\..\logs\methode.log",
			$CRLF .$insert_query, FILE_APPEND);
				
			if (!$rst_query) {
				$mysql_error = "Query failed: " . mysqli_error($connection);
				$er.=$mysql_error;
				$result = 0;
				//return false;
			}
			else {
				$result = 1;
				//echo ("<meta http-equiv='refresh' content='1'>");
				header("refresh:1; url=vw-data_entry_OPD.php");
			}
		}
	}
}
if($result) {
	$er.='Values registered successfully';
}
mysqli_close($connection);
echo json_encode(array('result' => $result, 'msg' => $er));
//}

?>