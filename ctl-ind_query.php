<?php 
    
    include 'ctl-db_connection.php';
    if (isset($_POST['srvtype']))
    {
        $srvtype = $_POST['srvtype'];
        $query= mysqli_query($connection, "SELECT id,name FROM indicator WHERE type = '".$srvtype."' "); 
    ?>
        <option value="0">-- Select Indicator --</option>
    <?php
        for ($i = 0; $i < mysqli_num_rows($query); $i++) {
			$row = mysqli_fetch_assoc($query);
    ?>
        <option value="<?php echo $row['id']?>"><?php echo $row['name']?>        </option> 
    <?php
        }
    }
	elseif (isset($_POST['ind']))
	{
        $id = $_POST['ind'];

        //$query= mysqli_query($connection, "SELECT * FROM indicator WHERE id = ".$id); 
		$query= mysqli_query($connection, "SELECT * FROM indicator WHERE id = ".$id); 
		$strsql = "select SUM(record.value) as total, what.name as disease, `when`.name as week
					from record
					inner join what on record.what = what.id
					inner join `when` on record.when = `when`.id
					where what.type = 'dis'
					group by what.name, `when`.name
					order by `when`.name,  what.name;";
		$result = mysqli_query($connection, $strsql); 
		if($result && mysqli_num_rows($result) > 0) {
			$arrColumns = array();
			$arrRows = array();
			$arrValues = array();
			for ($j = 0; $j < mysqli_num_rows($result); $j++) {
				$row = mysqli_fetch_assoc($result);
				if(!in_array($row['week'], $arrColumns)) $arrColumns[] = $row['week'];
				if(!in_array($row['disease'], $arrRows)) $arrRows[] = $row['disease'];
				$arrValues[$row['week']][$row['disease']] = $row['total'];
			}
		}
		$html_table =	" <tr>"; //Start header of the table
		$html_table	.= "    <th>Total consultations in OPD per disease</th>";
		foreach($arrColumns as $col) {
			$html_table	.= "    <th>".$col."</th>";
		}
		$html_table .=	" </tr>"; //Finish with the header of the table
		foreach($arrRows as $key => $row) {
			$html_table .=	" <tr>";  //Start with the row
			$html_table .= "    <td>".$row."</td>"; //Name of the disease is always the first value
			foreach($arrColumns as $col) {
				//Add now the values
				$html_table .= "    <td>".$arrValues[$col][$row]."</td>"; 
			}
			$html_table .=	" </tr>"; //Finish with the row
		}
				
		echo $html_table;
    }
?>