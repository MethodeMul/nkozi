 
<script type="text/javascript">
$(document).ready(function() {
	
	//--------- DataTables management
    var table1  = $('#Equipments').dataTable({
	    dom: 'rt',
 	});
   var table2 = $('#Admissions').dataTable({
	    dom: 'rt',
 	});

   var table3 = $('#Discharges').dataTable({
	    dom: 'rt',
 	});

 	var table4= $('#Discharge_diagnostics').dataTable({
	    dom: 'rt',
 	});

 	var table6 = $('#HIVTest').dataTable({
	    dom: 'rt',
 	});

 	var table7 = $('#Delivery_room').dataTable({
	    dom: 'rt',
 	});

 	var table9 = $('#utilization_of_serv').dataTable({
	    dom: 'rt',
 	});

 	var table10 = $('#TestMalaria').dataTable({
	    dom: 'rt',
 	});
 
} );

</script>

	<table id="Equipments" class="display" cellspacing="0" width="400px" >
		<thead>
			<tr>
				<th>Equipments</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Number of beds</td>
				<td><input type="text" id="r_22_1" name="r_22_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="Admissions" class="display" cellspacing="0" width="400px" align=center>
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
				<td><input type="text" id="r_175_1" name="r_175_1" class="numericInput" value="">
				</td>
			</tr>	
			<tr>
				<td>Referrals to maternity unit</td>
				<td><input type="text" id="r_176_1" name="r_176_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Maternity referrals out</td>
				<td><input type="text" id="r_177_1" name="r_177_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="Discharges" class="display" cellspacing="0" width="400px" align=center>
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
				<td><input type="text" id="r_178_1" name="r_178_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Desertion</td>
				<td><input type="text" id="r_179_1" name="r_179_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Referrals</td>
				<td><input type="text" id="r_180_1" name="r_180_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Deaths</td>
				<td><input type="text" id="r_181_1" name="r_181_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="Discharge_diagnostics" class="display" cellspacing="0" width="400px" align=center>
		<thead>
			<tr>
				<tr>
					<th id="maternal_cond" rowspan="2" scope="rowgroup">Maternal conditions</th>
					<th id="age_7" colspan="2" scope="colgroup">10-19 years</th>
					<th id="age_8" colspan="2" scope="colgroup">20-24 years</th>	
					<th id="age_9" colspan="2" scope="colgroup">>=25 years</th>
				</tr>
				<tr>
					<th id="exit_2" >Cases</th>
					<th id="exit_1" >Deaths</th>
					<th id="exit_2" >Cases</th>
					<th id="exit_1" >Deaths</th>
					<th id="exit_2" >Cases</th>
					<th id="exit_1" >Deaths</th>
				</tr>
		</thead>
		<tfoot>
				<tr>
					<th id="maternnalcondition" >Maternnal condition</th>
					<th id="Cases" >Cases</th>
					<th id="Deaths" >Deaths</th>
					<th id="Cases" >Cases</th>
					<th id="Deaths" >Deaths</th>
					<th id="Cases" >Cases</th>
					<th id="Deaths" >Deaths</th>
				</tr>
		</tfoot>
		<tbody>
			<tr>  
				<td>Abortion</td>
				
				<td><input type="text" id="r_182_1" name="r_182_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_182_2" name="r_182_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_182_3" name="r_182_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_182_4" name="r_182_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_182_5" name="r_182_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_182_6" name="r_182_6" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Obstructed labour</td>
				<td><input type="text" id="r_183_1" name="r_183_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_183_2" name="r_183_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_183_3" name="r_183_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_183_4" name="r_183_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_183_5" name="r_183_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_183_6" name="r_183_6" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Malaria in pregnancy</td>
				<td><input type="text" id="r_184_1" name="r_184_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_184_2" name="r_184_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_184_3" name="r_184_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_184_4" name="r_184_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_184_5" name="r_184_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_184_6" name="r_184_6" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Haemorrage related to pregnancy</td>
				<td><input type="text" id="r_185_1" name="r_185_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_185_2" name="r_185_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_185_3" name="r_185_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_185_4" name="r_185_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_185_5" name="r_185_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_185_6" name="r_185_6" class="numericInput" value=""></td>			
			</tr>
			<tr>
				<td>Pelvic inflamatory disease</td>
				<td><input type="text" id="r_186_1" name="r_186_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_186_2" name="r_186_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_186_3" name="r_186_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_186_4" name="r_186_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_186_5" name="r_186_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_186_6" name="r_186_6" class="numericInput" value=""></td>			
			</tr>
			<tr>
				<td>Other maternal conditions</td>
				<td><input type="text" id="r_187_1" name="r_187_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_187_2" name="r_187_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_187_3" name="r_187_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_187_4" name="r_187_4" class="numericInput" value=""></td>
				<td><input type="text" id="r_187_5" name="r_187_5" class="numericInput" value=""></td>
				<td><input type="text" id="r_187_6" name="r_187_6" class="numericInput" value=""></td>		
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
				<td><input type="text" id="r_188_1" name="r_188_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Retest this pregnancy</td>
				<td><input type="text" id="r_189_1" name="r_189_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Tested HIV+ 1st time this pregnancy</td>
				<td><input type="text" id="r_190_1" name="r_190_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Tested HIV+ Retest this pregnancy</td>
				<td><input type="text" id="r_191_1" name="r_20_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>HIV+ women initiating ART in Maternity</td>
				<td><input type="text" id="r_192_1" name="r_192_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Deliveries to HIV+ women in unit total</td>
				<td><input type="text" id="r_193_1" name="r_193_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Deliveries to HIV+ women in unit Live births</td>
				<td><input type="text" id="r_194_1" name="r_194_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Women who initiated breast feeding after the first hour after delivery total</td>
				<td><input type="text" id="r_195_1" name="r_195_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Women who initiated breast feeding after the first hour after delivery HIV+</td>
				<td><input type="text" id="r_196_1" name="r_196_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Babies born with low weight <2,5kg </td>
				<td><input type="text" id="r_197_1" name="r_197_1" class="numericInput" value="">
				</td>
			</tr>

			<tr>
				<td>Live birth </td>
				<td><input type="text" id="r_198_1" name="r_198_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Babies born with defect</td>
				<td><input type="text" id="r_199_1" name="r_199_1" class="numericInput" value="">
				</td>
			</tr>	
			<tr>
				<td>Mothers given vit A supplementation</td>
				<td><input type="text" id="r_200_1" name="r_200_1" class="numericInput" value="">
				</td>
			</tr>	
			<tr>
				<td>New born death (0-7 days)</td>
				<td><input type="text" id="r_201_1" name="r_201_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="Delivery_room" class="display" cellspacing="0" width="400px" align=center>
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
				<td><input type="text" id="r_202_1" name="r_202_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Caesarian sections</td>
				<td><input type="text" id="r_203_1" name="r_203_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Herniorrhaphy</td>
				<td><input type="text" id="r_204_1" name="r_204_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Other procedures</td>
				<td><input type="text" id="r_205_1" name="r_205_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Fresh still birth</td>
				<td><input type="text" id="r_206_1" name="r_206_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Macereted still birth</td>
				<td><input type="text" id="r_207_1" name="r_207_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Live birth</td>
				<td><input type="text" id="r_208_1" name="r_208_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Pre-Term births</td>
				<td><input type="text" id="r_209_1" name="r_209_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
	</table>

	<br>

	<table id="utilization_of_serv" class="display" cellspacing="0" width="400px" align=center>
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
				<td>Severe malaria</td>
				<td><input type="text" id="r_210_1" name="r_210_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_210_2" name="r_210_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_210_3" name="r_210_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_210_4" name="r_210_4" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Pregnancy child related complications</td>
				<td><input type="text" id="r_211_1" name="r_211_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_211_2" name="r_211_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_211_3" name="r_211_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_211_4" name="r_211_4" class="numericInput" value=""></td>
				</td>
			</tr>
			<tr>
				<td>Accidents</td>
				<td><input type="text" id="r_212_1" name="r_212_1" class="numericInput" value=""></td>
				<td><input type="text" id="r_212_2" name="r_212_2" class="numericInput" value=""></td>
				<td><input type="text" id="r_212_3" name="r_212_3" class="numericInput" value=""></td>
				<td><input type="text" id="r_212_4" name="r_212_4" class="numericInput" value=""></td>
			</tr>
			</tr>
		</tbody>
	</table>
</form>
