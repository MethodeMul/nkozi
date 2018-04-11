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
        $indID = $_POST['ind'];
        $query= mysqli_query($connection, "SELECT * FROM indicator WHERE id = ".$id); 
    ?>
		  <tr>
		    <th>Indicator result</th>
			<th>Week1</th>
			<th>Week2</th> 
			<th>Week3</th>
		  </tr>
		  <tr>
		    <td>Ind name</td>
			<td>1</td>
			<td>2</td> 
			<td>3</td>
		  </tr>
    <?php
    }
?>