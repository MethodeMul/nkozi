 

<script type="text/javascript">
$(document).ready(function() {
	
	//--------- DataTables management
    var table1 = $('#HPV').dataTable({
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

 	var table2 = $('#Child_immunization').dataTable({
	    dom: 'rt', //'T<"clear">lrtip' //Don't display Search bar and show entries
        //"iDisplayLength": 25,
		columns: [
			{ "width": "40px" },
			{ "width": "30px" },
			{ "width": "30px" }
		]
 	});

    var table3 = $('#HepatitisB').dataTable({
	    dom: 'rt',
        //"iDisplayLength": 25,
		columns: [
			{ "width": "70px" },
			{ "width": "30px" }
		]
       });

    var table4 = $('#Outreach').dataTable({
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
	<table id="HPV" class="display" cellspacing="0" width="400px">
		<thead>
			<tr align="left"><th id="HPV" colspan="9" scope="colgroup">HPV Vaccination</th></tr>
			<tr>
				
				<th rowspan="2" scope="rowgroup">Vaccination of girls</th>
				<th id="School" colspan="6" scope="colgroup">School</th>
				<th id="Community" colspan="2" scope="colgroup">Community</th>
			</tr>
			<tr align= center>	
				<td>9 years</td>
				<td>10 years</td>
				<td>11 years</td>
				<td>12 years</td>
				<td>13 years</td>
				<td>14 years</td>
				<td>9-14 years</td>
				<td>15+ years</td>
			</tr>
		</thead>
		<tfoot>
			<tr align = center>
				<th>Total</th>
				<td>9 years</td>
				<td>10 years</td>
				<td>11 years</td>
				<td>12 years</td>
				<td>13 years</td>
				<td>14 years</td>
				<td>9-14 years</td>
				<td>15+ years</td>
			</tr>
		</tfoot>
		<tbody>
			<tr>  
				<td>V1-HPV1-Dose 1</td>
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
				<td>V1-HPV1-Dose 2</td>
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
				<td>V1-HPV1-Dose 3</td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_2" name="r_3_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_3" name="r_3_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_4" name="r_3_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_5" name="r_3_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_6" name="r_3_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_7" name="r_3_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_8" name="r_3_8" class="numericInput" value=""></td>
			</tr>
			
		</tbody>
	</table>

	<br>

	<table id="Child_immunization" class="display" cellspacing="0" width="400px">
		<thead>
			<tr align="left"><th id="child" colspan="9" scope="colgroup">CHILD IMMUNIZATION</th></tr>
			<tr>
				
				<th rowspan="3" scope="rowgroup">Dose</th>
				<th id="Under1" colspan="4" scope="colgroup">Under 1</th>
				<th id="1-4years" colspan="4" scope="colgroup">1-4 years</th>
			</tr>
			<tr align="center">
				<th id="Static" colspan="2" scope="colgroup">Static</th>
				<th id="Outreach" colspan="2" scope="colgroup">Outreach</th>
			</tr>
			<tr align= center>	
				<td>M</td>
				<td>F</td>
				<td>M</td>
				<td>F</td>	
				<td>M</td>
				<td>F</td>
				<td>M</td>
				<td>F</td>
			</tr>
		</thead>
		<tbody>
			<tr>  
				<td>BCG</td>
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
				<td>Protection at birth for TT (PAB)</td>
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
				<td>Polio</td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_2" name="r_3_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_3" name="r_3_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_4" name="r_3_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_5" name="r_3_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_6" name="r_3_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_7" name="r_3_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_8" name="r_3_8" class="numericInput" value=""></td>
			</tr>
			
		</tbody>
	</table>
	<br>
	<table id="HepatitisB" class="display" cellspacing="0" width="400px">
		<thead>
			<tr align="left"><th id="child" colspan="3" scope="colgroup">HEPATITIS B VACCINATION</th></tr>
			<tr>
				<th">Male</th>
				<th">Female</th>
			</tr>
		</thead>
		<tfoot>
			<tr align = center>
				<th">Male</th>
				<th">Female</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>  
				<td>HBV 1 - Number of health workers in a unit</td>
				<td><input type="text" id="r_1_1" name="r_1_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_2" name="r_1_2" class="numericInput" value=""></td>		

			</tr>
			<tr>
				<td>HBV 2 - Number of health workers immunized Doses 1</td>
				<td><input type="text" id="r_2_1" name="r_2_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_2" name="r_2_2" class="numericInput" value=""></td>		
			</tr>
			<tr>
				<td>HBV 3 - Number of health workers immunized Doses 2</td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_2" name="r_3_2" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>HBV 4 - Number of health workers immunized Doses 3</td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_2" name="r_4_2" class="numericInput" value=""></td>
			</tr>
		</tbody>
	</table>
	<br>

	<table id="Outreach" class="display" cellspacing="0" width="400px">
		<thead>
			<tr align="left"><th id="child" colspan="9" scope="colgroup">OUTREACH ACTIVITES</th></tr>
			<tr>
				<th">Number planned</th>
				<th">Number carried out</th>
			</tr>
			<tr align= center>	
				<th">Planned</th>
				<th">Female</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>  
				<td>EPI outreaches</td>
				<td><input type="text" id="r_1_1" name="r_1_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_1_2" name="r_1_2" class="numericInput" value=""></td>		

			</tr>
			<tr>
				<td>HCT outreaches</td>
				<td><input type="text" id="r_2_1" name="r_2_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_2_2" name="r_2_2" class="numericInput" value=""></td>		
			</tr>
			<tr>
				<td>Maternal death audited</td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_3_2" name="r_3_2" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Perinatal death audited</td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_4_2" name="r_4_2" class="numericInput" value=""></td>
			</tr>
		</tbody>
	</table>
</form>
