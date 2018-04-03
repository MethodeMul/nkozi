 
<script type="text/javascript">
$(document).ready(function() {
	
	//--------- DataTables management

 	var table2 = $('#Diagnostics_exit').dataTable({
	    dom: 'rt', 
 	});

    var table3 = $('#TestMalaria').dataTable({
	    dom: 'rt',
		
       });

    var table4 = $('#HIVTest').dataTable({
	    dom: 'rt',
		
       });

    var table5 = $('#Referrals').dataTable({
	    dom: 'rt',
		
       });
	var table6 = $('#Census').dataTable({
	    dom: 'rt',
		
       });
	var table7 = $('#Discharges').dataTable({
	    dom: 'rt',
		
       });

    //------------------------


} );
</script>

<table id="Census" class="display" cellspacing="0" width="400px" style="float: left">
		<thead>
			<tr>
				<th>Census</th>
				<th>Number</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Census</th>
				<th>Number</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Number of beds</td>
				<td><input type="text" id="r_22_1" name="r_22_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Admissions</td>
				<td><input type="text" id="r_19_1" name="r_19_1" class="numericInput" value="">
				</td>
			</tr>
			
			<tr>
				<td>Length of stay</td>
				<td><input type="text" id="r_21_1" name="r_21_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Bed occupancy</td>
				<td><input type="text" id="r_20_1" name="r_20_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
</table>

<table id="Discharges" class="display" cellspacing="0" width="400px" style="float: left">
		<thead>
			<tr>
				<th>Discharges</th>
				<th>Total</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Discharges</th>
				<th>Total</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Improved</td>
				<td><input type="text" id="r_25_1" name="r_25_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Desertion</td>
				<td><input type="text" id="r_24_1" name="r_24_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Death</td>
				<td><input type="text" id="r_23_1" name="r_23_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Referral</td>
				<td><input type="text" id="r_26_1" name="r_26_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
</table>

<br><br><br>

<table id="Diagnostics_exit" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th id="Diagnostics_exit" rowspan="3" scope="rowgroup">Diagnostics exit</th>
				<th id="age_5" colspan="4" scope="colgroup">Under five years</th>
				<th id="age_6" colspan="4" scope="colgroup">Five years and above</th>	
			</tr>
			<tr>
				<th id="exit_2" colspan="2" scope="colgroup">Cured</th>
				<th id="exit_1" colspan="2" scope="colgroup">Deaths</th>
				<th id="exit_2" colspan="2" scope="colgroup">Cured</th>
				<th id="exit_1" colspan="2" scope="colgroup">Deaths</th>	
			</tr>
			<tr>	
				<th id="sex_1" colspan="1" scope="colgroup">Male</th>
				<th id="sex_2" colspan="1" scope="colgroup">Female</th>
				<th id="sex_1" colspan="1" scope="colgroup">Male</th>
				<th id="sex_2" colspan="1" scope="colgroup">Female</th>
				<th id="sex_1" colspan="1" scope="colgroup">Male</th>
				<th id="sex_2" colspan="1" scope="colgroup">Female</th>
				<th id="sex_1" colspan="1" scope="colgroup">Male</th>
				<th id="sex_2" colspan="1" scope="colgroup">Female</th>
			</tr>
		</thead>
		<tbody>
			<tr>  
				<td>Malaria</td>
				<td><input type="text" id="r_1_3" name="r_1_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_4" name="r_1_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_1" name="r_1_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_2" name="r_1_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_7" name="r_1_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_8" name="r_1_8" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_5" name="r_1_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_6" name="r_1_6" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Cholera</td>
				<td><input type="text" id="r_2_3" name="r_2_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_4" name="r_2_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_1" name="r_2_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_2" name="r_2_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_7" name="r_2_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_8" name="r_2_8" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_5" name="r_2_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_6" name="r_2_6" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Measles</td>
				<td><input type="text" id="r_3_3" name="r_3_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_4" name="r_3_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_2" name="r_3_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_7" name="r_3_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_8" name="r_3_8" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_5" name="r_3_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_6" name="r_3_6" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Trauma</td>
				<td><input type="text" id="r_4_3" name="r_4_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_4" name="r_4_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_2" name="r_4_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_7" name="r_4_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_8" name="r_4_8" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_5" name="r_4_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_6" name="r_4_6" class="numericInput" value=""></td>				
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

	<br><br>

	<table id="Referrals" class="display" cellspacing="0" width="400px" align=center>
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
				<td><input type="text" id="r_15_1" name="r_55_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Nsambya</td>
				<td><input type="text" id="r_16_1" name="r_56_1" class="numericInput" value="">
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
