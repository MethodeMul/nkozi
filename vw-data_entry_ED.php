 
<script type="text/javascript">
$(document).ready(function() {
	
	//--------- DataTables management
    var table1 = $('#Diagnostics_new').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
 	});

 	var table2 = $('#Referrals').dataTable({
	    dom: 'rt',
       });

    var table3 = $('#TestMalaria').dataTable({
	    dom: 'rt',
       });

    var table4 = $('#HIVTest').dataTable({
	    dom: 'rt',
       });
});
</script>

		<table id="Diagnostics_new" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Diagnostic (New cases)</th>
				<th id="age_1" colspan="2" scope="colgroup">0-28 days</th>
				<th id="age_2" colspan="2" scope="colgroup">29days-4years</th>
				<th id="age_3" colspan="2" scope="colgroup">5-59 years</th>
				<th id="age_4" colspan="2" scope="colgroup">60 years & above</th>
			</tr>
			<tr align= center>	
				<th>Category</th>	
				<th id="sex_1">Male</th>
				<th id="sex_2">Female</th>
				<th id="sex_1">Male</th>
				<th id="sex_2">Female</th>
				<th id="sex_1">Male</th>
				<th id="sex_2">Female</th>
				<th id="sex_1">Male</th>
				<th id="sex_2">Female</th>
			</tr>
		</thead>
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
				<td><input type="text" id="r_10_1" name="r_10_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_2" name="r_10_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_3" name="r_10_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_4" name="r_10_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_5" name="r_10_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_6" name="r_10_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_7" name="r_10_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_8" name="r_10_8" class="numericInput" value=""></td>			
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
				<td>Pneumonia</td>
				<td><input type="text" id="r_18_1" name="r_18_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_18_2" name="r_18_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_18_3" name="r_18_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_18_4" name="r_18_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_18_5" name="r_18_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_18_6" name="r_18_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_18_7" name="r_18_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_18_8" name="r_18_8" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>No pneumonia - Cough or cold</td>
				<td><input type="text" id="r_17_1" name="r_17_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_17_2" name="r_17_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_17_3" name="r_17_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_17_4" name="r_17_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_17_5" name="r_17_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_17_6" name="r_17_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_17_7" name="r_17_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_17_8" name="r_17_8" class="numericInput" value=""></td>

			</tr>
		</tbody>
	</table>

	<br>
	
	<table id="Referrals" class="display" cellspacing="0" width="400px" >
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
				<td><input type="text" id="r_15_1" name="r_15_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Nsambya</td>
				<td><input type="text" id="r_16_1" name="r_16_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Other referral</td>
				<td><input type="text" id="r_59_1" name="r_59_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="TestMalaria" class="display" cellspacing="0" width="400px" align=center>
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
				<td><input type="text" id="r_6_1" name="r_6_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Number of tests</td>
				<td><input type="text" id="r_5_1" name="r_5_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="HIVTest" class="display" cellspacing="0" width="400px" align=center>
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
				<td><input type="text" id="r_58_1" name="r_58_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Number of tests</td>
				<td><input type="text" id="r_57_1" name="r_57_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

