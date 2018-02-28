 
<script type="text/javascript">
$(document).ready(function() {
	var $service = $.cookie("service");
	var $year = $.cookie("year");
	var $week = $.cookie("week");
	
	//------- Load values from DB on page load
    $.ajax({
        url: 'ctl-read_values_form.php',
        async: false,
        context: document.body,
        data: { service: $service,
        	   year: $year,
        	   week: $week
        },
        success: function( datax ) {
        	var data = JSON.parse(datax);
    		if(data.result == 1) {
    			console.log("success");
    			for (var i = 0; i < data.values.length; i++) {
    				$('#'+data.values[i][1]).val(data.values[i][0]);
    				console.log(data.values[i][1] + ' ' + data.values[i][0]);
    			}
			}
			else {
				console.log("error");
				console.log(data.msg);
			}
    	}
	});
    /*$('#r_2_1').bind('mousedown', function(e){
        alert("papapaaa");
    });*/
	$('.numericInput').bind('input', function () {
		var yourInput = $(this).val();
		var no_spl_char = yourInput.replace(/[^0-9]/, '');
		$(this).val(no_spl_char);
	});

	//----------------------------------

	//------- Cookie management
	
	$( "#service" ).change(function() {
		  //console.log( "New value for select = " + $('#service').val() );
		$.cookie("service", $('#service').val());
		var $service = $('#service').val();
		location.reload();
	});
	$( "#year" ).change(function() {
		$.cookie("year", $('#year').val());
		var $year = $('#year').val();
		location.reload();
	});
	$( "#week" ).change(function() {
		$.cookie("week", $('#week').val());
		var $week = $('#week').val();
		location.reload();
	});
	$('#service').val($.cookie("service"));
	$('#year').val($.cookie("year"));
	$('#week').val($.cookie("week"));
	//---------------------------


    //-------- Submit button event to call controller and store values
	$('.submit').click(function(event) {
		//e.preventDefault();
		var $form = $(this).closest('form'); // get the form element this button belongs to
		
	    jQuery.post( 'ctl-write_values_form.php', $form.serialize(),
	    	    function( data ) {
    	    		alert("Values encoded successfully");
    	    		console.log("Values encoded");
    	            $('#er').html("lolo");
    	            $('#er').val("papaaa");
	    	        var data = eval( '('+dataStr+')' );
	    	        if(data.result == 1) {
	    	        	console.log("success---");
	    	            $('#er').html(data.msg);
	    	            $('#er').val("papaaa");
	    	            console.log(data.msg);
	    	            
	    	        }
	    	        else {
	    	        	console.log(data.msg);				        
	    	        	$('#er').html(data.msg);
	    	        }
	   	});
	   	
	});

	//--------------------------------

} );
</script>

<div id="er"><?php if(isset($er) && $er != '') echo $er; else echo '<div id="er_bl">Have a good encoding day</div>'; ?></div>


<form method="post" enctype="multipart/form-data">

	<input type="submit" name="submit" id='submit'
		value="Submit encoded values" class="submit">

	<div style="padding-top: 30px;">
		<label><b>Encoded week and year</b></label>
		<table style="padding-top: 15px;">
			<tr>
				<td>
					<label>Week</label>
					<select type="text" name="week" id="week">
						<?php 
						include_once 'ctl-db_connection.php';
						$sql = mysqli_query($connection, "SELECT distinct value FROM `when`");
						for ($i = 0; $i < mysqli_num_rows($sql); $i++) {
							$row = mysqli_fetch_assoc($sql);
							echo "<option value=\"". $row['value'] . "\">" . $row['value'] . "</option>";
						}
						?>
					</select>
				</td>
				<td>
					<label>Year</label>
					<select name="year" id="year">
						<?php 
						include_once 'ctl-db_connection.php';
						$sql = mysqli_query($connection, "SELECT distinct year FROM `when`");
						for ($i = 0; $i < mysqli_num_rows($sql); $i++) {
							$row = mysqli_fetch_assoc($sql);
							echo "<option value=\"". $row['year'] . "\">" . $row['year'] . "</option>";
						}
						?>
					</select>
				</td>
			</tr>
		</table>
	</div>
	
	<div style="padding-top: 90;">
		<label><b>Encoded service</b></label> 
		<br><br>

		<!-- I want to loop the service name from table wwhere From database and load form on select value-->

		<select name="service" id="service">
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

    <?php
				include ('vw-data_entry_IPD.php');
	?>
	
</form>
