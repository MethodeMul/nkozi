 
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


	//--------- DataTables management
    var table1 = $('#Diagnostics_new').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" },
			{ "width": "30px" }
		]
 	});

 	var table2 = $('#Diagnostics_old').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" },
			{ "width": "30px" }
		]
 	});

 	var table3 = $('#Referrals').dataTable({
	    dom: 'rt',
        //"iDisplayLength": 25,
		columns: [
			{ "width": "70px" },
			{ "width": "30px" }
		]
       });

    var table4 = $('#TestMalaria').dataTable({
	    dom: 'rt',
        //"iDisplayLength": 25,
		columns: [
			{ "width": "70px" },
			{ "width": "30px" }
		]
       });

    
    //------------------------

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
							for($i=1; $i<=52; $i++) {
								echo '<option value="'.$i.'">'.$i.'</option>';
							}
						?>
					</select>
				</td>
				<td>
					<label>Year</label>
					<select name="year" id="year">
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
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
			<option value="OPDNkozi">OPD Nkozi</option>
			<option value="EDNkozi">ED Nkozi</option>
			<option value="IPDNkozi">IPD Nkozi</option>
			<option value="MaternityNkozi">Maternity Nkozi</option>
			<option value="ImmunizationNkozi">Immunization Nkozi</option>
		</select>
	</div>

	<table id="Diagnostics_new" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Diagnostic (New cases)</th>
				<th>Age <5y</th>
				<th>Age >=5y</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Diagnostic (New cases)</th>
				<th>Age <5y</th>
				<th>Age >=5y</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>  
				<td>Malaria</td>
				<td><input type="text" id="r_1_1" name="r_1_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_2" name="r_1_2" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Cholera</td>
				<td><input type="text" id="r_2_1" name="r_2_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_2" name="r_2_2" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Measles</td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_2" name="r_3_2" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Trauma</td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_2" name="r_4_2" class="numericInput" value=""></td>
			</tr>
		</tbody>
	</table>

	<br>
	
	<table id="Referrals" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Referrals</th>
				<th>Total</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Referrals</th>
				<th>Total</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Mulago</td>
				<td><input type="text" id="r_7_1" name="r_7_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Nsambya</td>
				<td><input type="text" id="r_8_1" name="r_8_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="TestMalaria" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Test Malaria</th>
				<th>Total</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Test Malaria</th>
				<th>Total</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Number of positives</td>
				<td><input type="text" id="r_9_1" name="r_9_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Number of tests</td>
				<td><input type="text" id="r_10_1" name="r_10_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	
</form>
