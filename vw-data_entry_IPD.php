 
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
				<td><input type="text" id="r_14_1" name="r_14_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Admissions</td>
				<td><input type="text" id="r_15_1" name="r_15_1" class="numericInput" value="">
				</td>
			</tr>
			
			<tr>
				<td>Length of stay</td>
				<td><input type="text" id="r_17_1" name="r_17_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Bed occupancy</td>
				<td><input type="text" id="r_18_1" name="r_18_1" class="numericInput" value="">
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
				<td><input type="text" id="r_19_1" name="r_19_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Desertion</td>
				<td><input type="text" id="r_20_1" name="r_20_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Death</td>
				<td><input type="text" id="r_22_1" name="r_22_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Referral</td>
				<td><input type="text" id="r_23_1" name="r_23_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
</table>

<br><br><br>

<table id="Diagnostics_exit" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<tr>
					<th id="Diagn_exit" rowspan="3" scope="rowgroup">Diagnostics exit</th>
					<th id="<5years" colspan="4" scope="colgroup">Under five years</th>
					<th id="5&above" colspan="4" scope="colgroup">Five years and above</th>	
				</tr>
				<tr>
					<th id="Cases" colspan="2" scope="colgroup">Cases</th>
					<th id="Deaths" colspan="2" scope="colgroup">Deaths</th>
					<th id="Cases" colspan="2" scope="colgroup">Cases</th>
					<th id="Deaths" colspan="2" scope="colgroup">Deaths</th>	
				</tr>

			<tr align= center>	
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
			<tr align="center">
				<td>Total</td>
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
				<td>Cholera</td>
				<td><input type="text" id="r_2_1" name="r_2_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_2" name="r_2_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_3" name="r_2_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_4" name="r_2_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_5" name="r_2_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_6" name="r_2_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_5" name="r_2_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_6" name="r_2_8" class="numericInput" value=""></td>
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
