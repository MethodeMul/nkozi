 

<script type="text/javascript">
$(document).ready(function() {
	
	//--------- DataTables management
    var table1 = $('#HPV').dataTable({
	    dom: 'rt',
		
 	});

 	var table2 = $('#Child_immunization').dataTable({
	    dom: 'rt',
		
 	});

    var table3 = $('#HepatitisB').dataTable({
	    dom: 'rt',
       });

    var table4 = $('#Outreach').dataTable({
	    dom: 'rt',
	   });

    
    //------------------------

} );
</script>
	<br>
	<table id="HPV" class="display" cellspacing="0" width="400px">
		<thead>
			<tr align="left"><th id="HPV" colspan="9" scope="colgroup">HPV Vaccination</th></tr>
			<tr>
				
				<th rowspan="2" scope="rowgroup">Vaccination of girls</th>
				<th id="HPV_1" colspan="6" scope="colgroup">School</th>
				<th id="HPV_2" colspan="2" scope="colgroup">Community</th>
			</tr>
			<tr align= center>	
				<td id="age_10">9 years</td>
				<td id="age_11">10 years</td>
				<td id="age_12">11 years</td>
				<td id="age_13">12 years</td>
				<td id="age_14">13 years</td>
				<td id="age_15">14 years</td>
				<td id="age_16">9-14 years</td>
				<td id="age_17">15+ years</td>
			</tr>
		</thead>
		<tbody>
			<tr>  
				<td>V1-HPV1-Dose 1</td>
				<td><input type="text" id="r_137_1" name="r_137_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_137_2" name="r_137_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_137_3" name="r_137_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_137_4" name="r_137_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_137_5" name="r_137_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_137_6" name="r_137_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_137_7" name="r_137_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_137_8" name="r_137_8" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>V1-HPV1-Dose 2</td>
				<td><input type="text" id="r_138_1" name="r_138_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_138_2" name="r_138_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_138_3" name="r_138_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_138_4" name="r_138_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_138_5" name="r_138_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_138_6" name="r_138_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_138_7" name="r_138_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_138_8" name="r_138_8" class="numericInput" value=""></td>		
			</tr>
			<tr>
				<td>V1-HPV1-Dose 3</td>
				<td><input type="text" id="r_139_1" name="r_139_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_139_2" name="r_139_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_139_3" name="r_139_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_139_4" name="r_139_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_139_5" name="r_139_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_139_6" name="r_139_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_139_7" name="r_139_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_139_8" name="r_139_8" class="numericInput" value=""></td>
			</tr>
			
		</tbody>
	</table>

	<br>

	<table id="Child_immunization" class="display" cellspacing="0" width="400px">
		<thead>
			<tr align="left"><th id="child" colspan="9" scope="colgroup">CHILD IMMUNIZATION</th></tr>
			<tr>
				
				<th rowspan="3" scope="rowgroup">Dose</th>
				<th id="age_18" colspan="4" scope="colgroup">Under 1</th>
				<th id="age_19" colspan="4" scope="colgroup">1-4 years</th>
			</tr>
			<tr align="center">
				<th id="stategy_1" colspan="2" scope="colgroup">Static</th>
				<th id="stategy_2" colspan="2" scope="colgroup">Outreach</th>
				<th id="stategy_1" colspan="2" scope="colgroup">Static</th>
				<th id="stategy_2" colspan="2" scope="colgroup">Outreach</th>
			</tr>
			<tr align= center>	
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
				<td>BCG</td>
				<td><input type="text" id="r_140_1" name="r_140_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_140_2" name="r_140_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_140_3" name="r_140_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_140_4" name="r_140_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_140_5" name="r_140_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_140_6" name="r_140_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_140_7" name="r_140_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_140_8" name="r_140_8" class="numericInput" value=""></td>

			</tr>
			<tr>
				<td>Protection at birth for TT (PAB)</td>
				<td><input type="text" id="r_141_1" name="r_141_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_141_2" name="r_141_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_141_3" name="r_141_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_141_4" name="r_141_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_141_5" name="r_141_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_141_6" name="r_141_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_141_7" name="r_141_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_141_8" name="r_141_8" class="numericInput" value=""></td>		
			</tr>
			<tr>
				<td>Polio</td>
				<td><input type="text" id="r_142_1" name="r_142_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_142_2" name="r_142_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_142_3" name="r_142_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_142_4" name="r_142_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_142_5" name="r_142_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_142_6" name="r_142_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_142_7" name="r_142_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_142_8" name="r_142_8" class="numericInput" value=""></td>
			</tr>
			
		</tbody>
	</table>
	<br>
	<table id="HepatitisB" class="display" cellspacing="0" width="400px">	
		<thead>
			<tr align="left">
				<th id="child" colspan="3" scope="colgroup">HEPATITIS B VACCINATION</th>
			</tr>
			<tr>
				<th>Category</th>	
				<th id="sex_1">Male</th>
				<th id="sex_2">Female</th>
			</tr>
		</thead>
		<tbody>
			<tr>  
				<td>HBV 1 - Number of health workers in a unit</td>
				<td><input type="text" id="r_143_1" name="r_143_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_143_2" name="r_143_2" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>HBV 2 - Number of health workers immunized Doses 1</td>
				<td><input type="text" id="r_145_1" name="r_145_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_145_2" name="r_145_2" class="numericInput" value=""></td>	
			</tr>
			<tr>
				<td>HBV 3 - Number of health workers immunized Doses 2</td>
				<td><input type="text" id="r_146_1" name="r_146_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_146_2" name="r_146_2" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>HBV 4 - Number of health workers immunized Doses 3</td>
				<td><input type="text" id="r_147_1" name="r_147_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_147_2" name="r_147_2" class="numericInput" value=""></td>
			</tr>
		</tbody>
	</table>
	<br>

	<table id="Outreach" class="display" cellspacing="0" width="400px">
		<thead>
			<tr align="left">
				<th id="child" colspan="9" scope="colgroup">OUTREACH ACTIVITES</th>
			</tr>
			<tr>
				<th>Category</th>
				<th>Number</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>  
				<td>EPI outreaches</td>
				<td><input type="text" id="r_147_1" name="r_147_1" class="numericInput" value="">
			</tr>
			<tr>
				<td>HCT outreaches</td>
				<td><input type="text" id="r_148_1" name="r_148_1" class="numericInput" value="">	
			</tr>
			<tr>
				<td>Maternal death audited</td>
				<td><input type="text" id="r_149_1" name="r_149_1" class="numericInput" value="">
			</tr>
			<tr>
				<td>Perinatal death audited</td>
				<td><input type="text" id="r_150_1" name="r_150_1" class="numericInput" value="">
		</tbody>
	</table>
</form>
