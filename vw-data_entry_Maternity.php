 
<script type="text/javascript">
$(document).ready(function() {
	
	//--------- DataTables management
    var table1 = $('#Discharge_diagnostics').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" }
		]
 	});

 	var table2 = $('#Equipments').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
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

    var table5 = $('#Admissions').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" }
		]
 	});

 	var table6 = $('#Discharges').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" }
		]
 	});

 	var table7 = $('#HIVTest').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" }
		]
 	});

 	var table8 = $('#').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
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


	<table id="Equipments" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Equipments</th>
				<th>Total</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
				<td>Number of beds</td>
				<td><input type="text" id="r_11_1" name="r_11_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="Admissions" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Obstetrical admissions</th>
				<th>Total</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Obstetrical admissions</th>
				<th>Total</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Mpigi District</td>
				<td><input type="text" id="r_12_1" name="r_12_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Others</td>
				<td><input type="text" id="r_13_1" name="r_13_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="Discharges" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Maternity discharges</th>
				<th>Total</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Maternity discharges</th>
				<th>Total</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Improved condition</td>
				<td><input type="text" id="r_14_1" name="r_14_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Desertion</td>
				<td><input type="text" id="r_15_1" name="r_15_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Referrals</td>
				<td><input type="text" id="r_16_1" name="r_16_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Deaths</td>
				<td><input type="text" id="r_17_1" name="r_17_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="Discharge_diagnostics" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Discharge diagnostics</th>
				<th>Target population</th>
				<th>Death <48h</th>
				<th>Death >=48h</th>
				<th>Out target population</th>
				<th>Death <48h</th>
				<th>Death >=48h</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Discharge diagnostic</th>
				<th>Target population</th>
				<th>Death <48h</th>
				<th>Death >=48h</th>
				<th>Out target population</th>
				<th>Death <48h</th>
				<th>Death >=48h</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>  
				<td>Anemia</td>
				<td><input type="text" id="r_1_1" name="r_1_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_2" name="r_2_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_3" name="r_2_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_4" name="r_2_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_5" name="r_2_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_6" name="r_2_6" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Eclampsia</td>
				<td><input type="text" id="r_2_1" name="r_2_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_2" name="r_1_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_2" name="r_1_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_2" name="r_1_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_2" name="r_1_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_2" name="r_1_2" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Miscarrage</td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_2" name="r_3_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_3" name="r_3_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_4" name="r_3_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_5" name="r_3_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_6" name="r_3_6" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Trauma</td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_2" name="r_4_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_3" name="r_4_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_4" name="r_4_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_5" name="r_4_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_6" name="r_4_6" class="numericInput" value=""></td>
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

	<table id="HIVTest" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>HIV Test</th>
				<th>Total</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>HIV Test</th>
				<th>Total</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Number of positives</td>
				<td><input type="text" id="r_11_1" name="r_11_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Number of tests</td>
				<td><input type="text" id="r_12_1" name="r_12_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Number of Pretests</td>
				<td><input type="text" id="r_13_1" name="r_13_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="Delivery_room" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Delivery room</th>
				<th>Target</th>
				<th>Out Target</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Delivery room</th>
				<th>Target</th>
				<th>Out Target</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Normal delivery</td>
				<td><input type="text" id="r_14_1" name="r_14_1" class="numericInput" value="">
				<td><input type="text" id="r_14_2" name="r_14_2" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Rachi</td>
				<td><input type="text" id="r_15_1" name="r_15_1" class="numericInput" value="">
				<td><input type="text" id="r_15_2" name="r_15_2" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Craniotomy</td>
				<td><input type="text" id="r_16_1" name="r_16_1" class="numericInput" value="">
				<td><input type="text" id="r_16_2" name="r_16_2" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>
</form>
