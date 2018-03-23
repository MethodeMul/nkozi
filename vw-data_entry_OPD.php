 

<script type="text/javascript">
$(document).ready(function() {
	
	//--------- DataTables management
    var table1 = $('#Diagnostics_new').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "100px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" },
			{ "width": "30px" },
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

    var table3 = $('#TestMalaria').dataTable({
	    dom: 'rt',
        //"iDisplayLength": 25,
		columns: [
			{ "width": "70px" },
			{ "width": "30px" }
		]
       });

    var table4 = $('#HIVTest').dataTable({
	    dom: 'rt',
        //"iDisplayLength": 25,
		columns: [
			{ "width": "70px" },
			{ "width": "30px" }
		]
       });

    var table5 = $('#Referrals').dataTable({
	    dom: 'rt',
        //"iDisplayLength": 25,
		columns: [
			{ "width": "70px" },
			{ "width": "30px" }
		]
       });

    //------------------------

} );
</script>
	<br>
	<table id="Diagnostics_new" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Diagnostic (New cases)</th>
				<th id="0-28" colspan="2" scope="colgroup">0-28 days</th>
				<th id="29days-4years" colspan="2" scope="colgroup">29days-4years</th>
				<th id="5-59years" colspan="2" scope="colgroup">5-59 years</th>
				<th id="60&above" colspan="2" scope="colgroup">60 years & above</th>
			</tr>
			<tr align= center>	
				<th>Category</th>
					<td>Male</td>
					<td>Female</td>
					<td>Male</td>
					<td>Female</td>
					<td>Male</td>
					<td>Female</td>
					<td>Male</td>
					<td>Female</td>
			</tr>
		</thead>
		<tfoot>
			<tr align = center>
				<th>Total (New cases)</th>
				<td>Male</td>
				<td>Female</td>
				<td>Male</td>
				<td>Female</td>
				<td>Male</td>
				<td>Female</td>
				<td>Male</td>
				<td>Female</td>
			</tr>
		</tfoot>
		<tbody>
			<tr>  
				<td>Malaria</td>
				<td><input type="text" id="r_1_1" name="r_1_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_2" name="r_1_2" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_3" name="r_1_3" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_4" name="r_1_4" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_5" name="r_1_5" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_6" name="r_1_6" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_7" name="r_1_7" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_8" name="r_1_8" class="numericInput" value=""></td>



			</tr>
			<tr>
				<td>Typhoid Fever</td>
				<td><input type="text" id="r_2_1" name="r_2_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_2" name="r_2_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_3" name="r_2_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_4" name="r_2_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_5" name="r_2_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_6" name="r_2_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_7" name="r_2_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_8" name="r_2_8" class="numericInput" value=""></td>			
			</tr>
			<tr>
				<td>Measles</td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_2" name="r_3_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_3" name="r_3_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_4" name="r_3_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_5" name="r_3_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_6" name="r_3_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_7" name="r_3_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_8" name="r_3_8" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Trauma</td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_2" name="r_4_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_3" name="r_4_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_4" name="r_4_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_5" name="r_4_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_6" name="r_4_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_7" name="r_4_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_8" name="r_4_8" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Diarrhoea acute</td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_2" name="r_4_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_3" name="r_4_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_4" name="r_4_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_5" name="r_4_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_6" name="r_4_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_7" name="r_4_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_8" name="r_4_8" class="numericInput" value=""></td>
			</tr>

		</tbody>
	</table>

	<br>

	<table id="Diagnostics_old" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Diagnostic (Old cases)</th>
				<th id="0-28" colspan="2" scope="colgroup">0-28 days</th>
				<th id="29days-4years" colspan="2" scope="colgroup">29days-4years</th>
				<th id="5-59years" colspan="2" scope="colgroup">5-59 years</th>
				<th id="60&above" colspan="2" scope="colgroup">60 years & above</th>
			</tr>
			<tr align= center>	
				<th>Category</th>
					<td>Male</td>
					<td>Female</td>
					<td>Male</td>
					<td>Female</td>
					<td>Male</td>
					<td>Female</td>
					<td>Male</td>
					<td>Female</td>
			</tr>
		</thead>
		
		<tbody>
			<tr>  
				<td>Diabetes melitus</td>
				<td><input type="text" id="r_1_1" name="r_1_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_2" name="r_1_2" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_3" name="r_1_3" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_4" name="r_1_4" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_5" name="r_1_5" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_6" name="r_1_6" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_7" name="r_1_7" class="numericInput" value=""></td>				
				<td><input type="text" id="r_1_8" name="r_1_8" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Hypertension</td>
				<td><input type="text" id="r_2_1" name="r_2_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_2" name="r_2_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_3" name="r_2_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_4" name="r_2_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_5" name="r_2_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_6" name="r_2_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_7" name="r_2_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_8" name="r_2_8" class="numericInput" value=""></td>			
			</tr>
			<tr>
				<td>Sickle cell anemia</td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_2" name="r_3_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_3" name="r_3_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_4" name="r_3_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_5" name="r_3_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_6" name="r_3_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_7" name="r_3_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_8" name="r_3_8" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Anxiety disorders</td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_2" name="r_4_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_3" name="r_4_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_4" name="r_4_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_5" name="r_4_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_6" name="r_4_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_7" name="r_4_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_8" name="r_4_8" class="numericInput" value=""></td>
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
			<tr>
				<td>Other</td>
				<td><input type="text" id="r_14_1" name="r_14_1" class="numericInput" value="">
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
</form>
