
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>



<script type="text/javascript">
$(document).ready(function() {
	var $service = $.cookie("service");
	$( "#serviceSel" ).change(function() {
		  //console.log( "New value for select = " + $('#service').val() );
		$.cookie("service", $('#serviceSel').val());
		var $service = $('#serviceSel').val();
		switch($service) {
			case 'OPD':
				window.location="vw-data_entry_ED.php";
			break;
			case 'IPD':
				window.location="vw-data_entry_OPD.php";
			break;
		}			
	});
	$('#serviceSel').val($.cookie("service"));
} );
</script>


<form>
  <select name="serviceSel" id="serviceSel">
    <option value="OPD" selected="selected">OPD</option>
    <option value="IPD">IPD</option>
  </select>
</form>

<!--
<div style="padding-top: 90;">
		<label><b>Encoded service</b></label> 
		<br><br>

		<!-- loop the service name from table wwhere From database and load form on select value-->

		<!--<select name="service" id="service">
			<?php 
			include_once 'ctl-db_connection.php';
			$sql = mysqli_query($connection, "SELECT id, name FROM `where`");
			for ($i = 0; $i < mysqli_num_rows($sql); $i++) {
				$row = mysqli_fetch_assoc($sql);
				echo "<option value=\"". $row['id'] . "\">" . $row['name'] . "</option>";
			}
			?>
		</select>
</div>

