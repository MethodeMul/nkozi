 

<script type="text/javascript">
$(document).ready(function() {
	
	//--------- DataTables management
    var table1 = $('#Diagnostics_new').dataTable({
	    dom: 'rt'
 	});

 	var table2 = $('#Diagnostics_old').dataTable({
	    dom: 'rt'
 	});

    var table3 = $('#TestMalaria').dataTable({
	    dom: 'rt'
       });

    var table4 = $('#HIVTest').dataTable({
	    dom: 'rt'
       });

    var table5 = $('#Referrals').dataTable({
	    dom: 'rt'
       });

    //------------------------

} );
</script>
	<br>
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
				<td>Diarrhoea acute</td>
				<td><input type="text" id="r_9_1" name="r_9_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_2" name="r_9_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_3" name="r_9_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_4" name="r_9_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_5" name="r_9_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_6" name="r_9_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_7" name="r_9_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_8" name="r_9_8" class="numericInput" value=""></td>
			</tr>

		</tbody>
	</table>

	<br>

	<table id="Diagnostics_old" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Diagnostic (Old cases)</th>
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
				<td>Diabetes melitus</td>
				<td><input type="text" id="r_12_1" name="r_12_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_2" name="r_12_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_3" name="r_12_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_4" name="r_12_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_5" name="r_12_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_6" name="r_12_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_7" name="r_12_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_8" name="r_12_8" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Hypertension</td>
				<td><input type="text" id="r_13_1" name="r_13_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_2" name="r_13_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_3" name="r_13_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_4" name="r_13_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_5" name="r_13_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_6" name="r_13_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_7" name="r_13_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_8" name="r_13_8" class="numericInput" value=""></td>		
			</tr>
			<tr>
				<td>Sickle cell anemia</td>
				<td><input type="text" id="r_14_1" name="r_14_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_2" name="r_14_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_3" name="r_14_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_4" name="r_14_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_5" name="r_14_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_6" name="r_14_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_7" name="r_14_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_8" name="r_14_8" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Anxiety disorders</td>
				<td><input type="text" id="r_11_1" name="r_11_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_2" name="r_11_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_3" name="r_11_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_4" name="r_11_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_5" name="r_11_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_6" name="r_11_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_7" name="r_11_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_8" name="r_11_8" class="numericInput" value=""></td>
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
</form>
