 
<script type="text/javascript">
$(document).ready(function() {
	
	//--------- DataTables management
    var table1  = $('#Equipments').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" }
		]
 	});
   var table2 = $('#Admissions').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" }
		]
 	});

   var table3 = $('#Discharges').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" }
		]
 	});

 	var table4= $('#Discharge_diagnostics').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "20px" },
			{ "width": "20px" },
			{ "width": "20px" },
			{ "width": "20px" },
			{ "width": "20px" },
			{ "width": "20px" }
		]
 	});

    var table5 = $('#TestMlaria').dataTable({
	    dom: 'rt',
        //"iDisplayLength": 25,
		columns: [
			{ "width": "70px" },
			{ "width": "30px" }
		]
       });

 	var table6 = $('#HIVTest').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" }
		]
 	});

 	var table7 = $('#Delivery_room').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" }
		]
 	});

 	var table8 = $('#procedures').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" }
		]
 	});

 	var table9 = $('#utilization_of_serv').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" }
		]
 	});
 
} );

</script>

	<table id="postnatal_attendances" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th colspan="2">POST NATAL</th>
			</tr>
			<tr>
				<th>Postnal attendances</th>
				<th>Number</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Postnal attendances</th>
				<th>Number</th>
			</tr>
		</tfoot>
		<tbody>
			
			<tr>
				<td>10-19 years</td>
				<td><input type="text" id="r_2_1" name="r_2_1" class="numericInput" value="">
				</td>
			</tr>	
			<tr>
				<td>20-24 years</td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>>=25 years</td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>6 hours</td>
				<td><input type="text" id="r_1_1" name="r_1_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>6 days</td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	