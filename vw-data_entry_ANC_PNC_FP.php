 
<script type="text/javascript">
$(document).ready(function() {
	
	//--------- DataTables management
    var table1  = $('#postnatal_attendances').dataTable({
	    dom: 'rt',
 	});

} );

</script>

	<table id="postnatal_attendances" class="display" cellspacing="0" width="400px">
		<thead>
			<tr>
				<th colspan="2">POST NATAL CONSULTATIONS</th>
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
				<td><input type="text" id="r_1_1" name="r_1_1" class="numericInput" value="">
				</td>
			</tr>	
			<tr>
				<td>20-24 years</td>
				<td><input type="text" id="r_2_1" name="r_2_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>>=25 years</td>
				<td><input type="text" id="r_3_1" name="r_3_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>6 hours</td>
				<td><input type="text" id="r_4_1" name="r_4_1" class="numericInput" value="">
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

	