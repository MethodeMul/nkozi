 
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
				<td><input type="text" id="r_1_1" name="r_1_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="Admissions" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Admissions</th>
				<th>Number</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Admissions</th>
				<th>Number</th>
			</tr>
		</tfoot>
		<tbody>
			
			<tr>
				<td>Direct admissions</td>
				<td><input type="text" id="r_2_1" name="r_2_1" class="numericInput" value="">
				</td>
			</tr>	
			<tr>
				<td>Referrals to maternity unit</td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Maternity referrals out</td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value="">
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
				<td><input type="text" id="r_5_1" name="r_5_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Desertion</td>
				<td><input type="text" id="r_6_1" name="r_6_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Referrals</td>
				<td><input type="text" id="r_7_1" name="r_7_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Deaths</td>
				<td><input type="text" id="r_8_1" name="r_8_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="Discharge_diagnostics" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<tr>
					<th id="maternal_cond" rowspan="3" scope="rowgroup">Maternal conditions</th>
					<th id="10-19years" colspan="4" scope="colgroup">10-19 years</th>
					<th id="20-24years" colspan="4" scope="colgroup">20-24 years</th>	
					<th id=">=25years" colspan="4" scope="colgroup">>=25 years</th>
				</tr>
				<tr>
					<th id="Cases" colspan="2" scope="colgroup">Cases</th>
					<th id="Deaths" colspan="2" scope="colgroup">Deaths</th>
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
				<td>Male</td>
				<td>Female</td>
				<td>Male</td>
				<td>Female</td>
			</tr>
		</tfoot>
		<tbody>
			<tr>  
				<td>Abortion</td>
				<td><input type="text" id="r_9_1" name="r_9_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_2" name="r_9_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_3" name="r_9_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_4" name="r_9_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_5" name="r_9_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_6" name="r_9_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_7" name="r_9_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_8" name="r_9_8" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_9" name="r_9_9" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_10" name="r_9_10" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_11" name="r_9_11" class="numericInput" value=""></td>
				<td><input type="text" id="r_9_12" name="r_9_12" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Obstructed labour</td>
				<td><input type="text" id="r_10_1" name="r_10_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_2" name="r_10_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_3" name="r_10_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_4" name="r_10_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_5" name="r_10_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_6" name="r_10_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_7" name="r_10_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_8" name="r_10_8" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_9" name="r_10_9" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_10" name="r_10_10" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_11" name="r_10_11" class="numericInput" value=""></td>
				<td><input type="text" id="r_10_12" name="r_10_12" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Malaria in pregnancy</td>
				<td><input type="text" id="r_11_1" name="r_11_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_2" name="r_11_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_3" name="r_11_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_4" name="r_11_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_5" name="r_11_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_6" name="r_11_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_7" name="r_11_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_8" name="r_11_8" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_9" name="r_11_9" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_10" name="r_11_10" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_11" name="r_11_11" class="numericInput" value=""></td>
				<td><input type="text" id="r_11_12" name="r_11_12" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Haemorrage related to pregnancy</td>
				<td><input type="text" id="r_12_1" name="r_12_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_2" name="r_12_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_3" name="r_12_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_4" name="r_12_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_5" name="r_12_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_6" name="r_12_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_7" name="r_12_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_8" name="r_12_8" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_9" name="r_12_9" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_10" name="r_12_10" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_11" name="r_12_11" class="numericInput" value=""></td>
				<td><input type="text" id="r_12_12" name="r_12_12" class="numericInput" value=""></td>				
			</tr>
			<tr>
				<td>Pelvic inflamatory disease</td>
				<td><input type="text" id="r_13_1" name="r_13_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_2" name="r_13_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_3" name="r_13_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_4" name="r_13_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_5" name="r_13_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_6" name="r_13_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_7" name="r_13_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_8" name="r_13_8" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_9" name="r_13_9" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_10" name="r_13_10" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_11" name="r_13_11" class="numericInput" value=""></td>
				<td><input type="text" id="r_13_12" name="r_13_12" class="numericInput" value=""></td>					
			</tr>
			<tr>
				<td>Other</td>
				<td><input type="text" id="r_14_1" name="r_14_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_2" name="r_14_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_3" name="r_14_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_4" name="r_14_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_5" name="r_14_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_6" name="r_14_6" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_7" name="r_14_7" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_8" name="r_14_8" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_9" name="r_14_9" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_10" name="r_14_10" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_11" name="r_14_11" class="numericInput" value=""></td>
				<td><input type="text" id="r_14_12" name="r_14_12" class="numericInput" value=""></td>				
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
				<td><input type="text" id="r_15_1" name="r_15_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Number of tests</td>
				<td><input type="text" id="r_16_1" name="r_16_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="HIVTest" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Womem tested for HIV in labour</th>
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
				<td>1st time this pregnancy</td>
				<td><input type="text" id="r_17_1" name="r_17_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Retest this pregnancy</td>
				<td><input type="text" id="r_18_1" name="r_18_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Tested HIV+ 1st time this pregnancy</td>
				<td><input type="text" id="r_19_1" name="r_19_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Tested HIV+ Retest this pregnancy</td>
				<td><input type="text" id="r_20_1" name="r_20_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>HIV+ women initiating ART in Maternity</td>
				<td><input type="text" id="r_21_1" name="r_21_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Deliveries to HIV+ women in unit total</td>
				<td><input type="text" id="r_22_1" name="r_22_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Deliveries to HIV+ women in unit Live births</td>
				<td><input type="text" id="r_23_1" name="r_23_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Women who initiated breast feeding after the first hour after delivery total</td>
				<td><input type="text" id="r_24_1" name="r_24_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Women who initiated breast feeding after the first hour after delivery HIV+</td>
				<td><input type="text" id="r_25_1" name="r_25_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Babies born with low weight <2,5kg </td>
				<td><input type="text" id="r_26_1" name="r_26_1" class="numericInput" value="">
				</td>
			</tr>

			<tr>
				<td>Live birth </td>
				<td><input type="text" id="r_27_1" name="r_27_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Babies born with defect</td>
				<td><input type="text" id="r_28_1" name="r_28_1" class="numericInput" value="">
				</td>
			</tr>	
			<tr>
				<td>Mothers given vit A supplementation</td>
				<td><input type="text" id="r_29_1" name="r_29_1" class="numericInput" value="">
				</td>
			</tr>	
			<tr>
				<td>New born death (0-7 days)</td>
				<td><input type="text" id="r_30_1" name="r_30_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="Delivery_room" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Delivery room</th>
				<th>Nunber</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Delivery room</th>
				<th>Number</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Normal delivery</td>
				<td><input type="text" id="r_31_1" name="r_31_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Caesarian sections</td>
				<td><input type="text" id="r_32_1" name="r_32_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Herniorrhaphy</td>
				<td><input type="text" id="r_33_1" name="r_33_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Other procedures</td>
				<td><input type="text" id="r_34_1" name="r_34_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Fresh still birth</td>
				<td><input type="text" id="r_35_1" name="r_35_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Macereted still birth</td>
				<td><input type="text" id="r_36_1" name="r_36_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Live birth</td>
				<td><input type="text" id="r_37_1" name="r_37_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Pre-Term births</td>
				<td><input type="text" id="r_38_1" name="r_38_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>
	<br>
	<table id="Procedures" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Procedures</th>
				<th>Nunber</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Procedures</th>
				<th>Number</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Normal delivery</td>
				<td><input type="text" id="r_39_1" name="r_39_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Caesarian sections</td>
				<td><input type="text" id="r_40_1" name="r_40_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Herniorrhaphy</td>
				<td><input type="text" id="r_41_1" name="r_41_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Other procedures</td>
				<td><input type="text" id="r_42_1" name="r_42_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>
	<table id="utilization_of_serv" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th>Blood transfustion</th>
				<th>Whole bolood</th>
				<th>Packed cells</th>
				<th>Platelets</th>
				<th>Plasma</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Normal delivery</td>
				<td><input type="text" id="r_43_1" name="r_43_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_43_2" name="r_43_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_43_3" name="r_43_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_43_4" name="r_43_4" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Caesarian sections</td>
				<td><input type="text" id="r_44_1" name="r_44_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_44_2" name="r_44_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_44_3" name="r_44_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_44_4" name="r_44_4" class="numericInput" value=""></td>
				</td>
			</tr>
			<tr>
				<td>Herniorrhaphy</td>
				<td><input type="text" id="r_45_1" name="r_45_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_45_2" name="r_45_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_45_3" name="r_45_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_45_4" name="r_45_4" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Other procedures</td>
				td><input type="text" id="r_46_1" name="r_46_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_46_2" name="r_46_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_46_3" name="r_46_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_46_4" name="r_46_4" class="numericInput" value=""></td>
				</td>
			</tr>
		</tbody>
	</table>
</form>
