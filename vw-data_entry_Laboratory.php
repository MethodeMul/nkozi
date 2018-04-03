 
<script type="text/javascript">
$(document).ready(function() {
	
	//--------- DataTables management
	var table1 = $('#Hematology').dataTable({
	    dom: 'rt', 
 	});

 	var table2 = $('#Blood_transfusion').dataTable({
	    dom: 'rt', 
 	});

    var table3 = $('#Parasitology').dataTable({
	    dom: 'rt',
		
       });

    var table4 = $('#Seriology').dataTable({
	    dom: 'rt',
		
       });

    var table5 = $('#Immunology').dataTable({
	    dom: 'rt',
		
       });
	var table6 = $('#Microbiology').dataTable({
	    dom: 'rt',
		
       });
	var table7 = $('#clinical_profile').dataTable({
	    dom: 'rt',
		
       });

} );
</script>

<form align='center'>
<table id="Hematology" class="display" cellspacing="0" width="400px" style="float: left align=center">
		<thead>
			<tr>
				<th colspan="3">HEMATOLOGY</th>
			</tr>
			<tr>
				<th>Laboratory test</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Hb done</td>
				<td><input type="text" id="r_60_1" name="r_60_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Hb positive</td>
				<td><input type="text" id="r_61_1" name="r_61_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>HBG<8 done</td>
				<td><input type="text" id="r_64_1" name="r_64_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>HBG<8 positive</td>
				<td><input type="text" id="r_65_1" name="r_65_1" class="numericInput" value="">
				</td>
			</tr>			
			<tr>
				<td>HBG>=8 done</td>
				<td><input type="text" id="r_62_1" name="r_62_1" class="numericInput" value="">
				</td>
			</tr>		
			<tr>
				<td>HBG>=8 positive</td>
				<td><input type="text" id="r_63_1" name="r_63_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>WBC Total done</td>
				<td><input type="text" id="r_66_1" name="r_66_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>WBC Total positive</td>
				<td><input type="text" id="r_67_1" name="r_67_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
</table>

<br>

<table id="Blood_transfusion" class="display" cellspacing="0" width="400px" style="float: left align=center">
		<thead>
			<tr>
				<th colspan="3">BLOOD TRANSFUSION</th>
			</tr>
			<tr>
				<th>Laboratory test</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>ABO Grouping done</td>
				<td><input type="text" id="r_68_1" name="r_68_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>ABO Grouping positive</td>
				<td><input type="text" id="r_69_1" name="r_69_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Blood collected (Units) done</td>
				<td><input type="text" id="r_70_1" name="r_70_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Blood collected (Units) positive</td>
				<td><input type="text" id="r_71_1" name="r_71_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Blood transfusion (Lts) done</td>
				<td><input type="text" id="r_72_1" name="r_72_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Blood transfusion (Lts) positive</td>
				<td><input type="text" id="r_73_1" name="r_73_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Combs done</td>
				<td><input type="text" id="r_74_1" name="r_74_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Combs positive</td>
				<td><input type="text" id="r_75_1" name="r_75_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Cross Matching done</td>
				<td><input type="text" id="r_76_1" name="r_76_1" class="numericInput" value="">
				</td>
			</tr>
			<tr>
				<td>Cross Matching positive</td>
				<td><input type="text" id="r_77_1" name="r_77_1" class="numericInput" value="">
				</td>
			</tr>
		</tbody>
</table>

<br>

<table id="Parasitology" class="display" cellspacing="0" width="400px" style="float: left align=center">
		<thead>
			<tr>
				<th colspan="3">PARASITOLOGY</th>
			</tr>
			<tr>
				<th>Laboratory test</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Entamoeba done</td>
				<td><input type="text" id="r_78_1" name="r_78_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Entamoeba positive</td>
				<td><input type="text" id="r_79_1" name="r_79_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Malaria microscopy done</td>
				<td><input type="text" id="r_80_1" name="r_80_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Malaria microscopy positive</td>
				<td><input type="text" id="r_81_1" name="r_81_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Malaria RDTs done</td>
				<td><input type="text" id="r_82_1" name="r_82_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Malaria RDTs positive</td>
				<td><input type="text" id="r_83_1" name="r_83_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Other parasites done</td>
				<td><input type="text" id="r_84_1" name="r_84_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Other parasites  positive</td>
				<td><input type="text" id="r_85_1" name="r_85_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Shistosoma done</td>
				<td><input type="text" id="r_86_1" name="r_86_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Shistosoma positive</td>
				<td><input type="text" id="r_87_1" name="r_87_1" class="numericInput" value=""></td>
			</tr>
		</tbody>
</table>

<br>

<table id="Seriology" class="display" cellspacing="0" width="400px" style="float: left align=center">
		<thead>
			<tr>
				<th colspan="3">SERIOLOGY</th>
			</tr>
			<tr>
				<th>Laboratory test</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Brucella done</td>
				<td><input type="text" id="r_88_1" name="r_88_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Brucella positive</td>
				<td><input type="text" id="r_89_1" name="r_89_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>VDRL/RPR done</td>
				<td><input type="text" id="r_102_1" name="r_102_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>VDRL/RPR positive</td>
				<td><input type="text" id="r_103_1" name="r_103_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>TPHA done</td>
				<td><input type="text" id="r_100_1" name="r_100_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>TPHA positive</td>
				<td><input type="text" id="r_101_1" name="r_101_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Shigella Dysentery done</td>
				<td><input type="text" id="r_98_1" name="r_98_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Shigella Dysentery positive</td>
				<td><input type="text" id="r_99_1" name="r_99_1" class="numericInput" value=""></td>
			</tr>
			<tr>	
				<td>Hepatitis B done</td>
				<td><input type="text" id="r_90_1" name="r_90_1" class="numericInput" value=""></td>
			</tr>
			<tr>	
				<td>Hepatitis B positive</td>
				<td><input type="text" id="r_91_1" name="r_91_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Pregnancy test done</td>
				<td><input type="text" id="r_94_1" name="r_94_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Pregnancy test positive</td>
				<td><input type="text" id="r_95_1" name="r_95_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Rheumatoid factor done</td>
				<td><input type="text" id="r_96_1" name="r_96_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Rheumatoid factor positive</td>
				<td><input type="text" id="r_97_1" name="r_97_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Other seriology tests done</td>
				<td><input type="text" id="r_92_1" name="r_92_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Other seriology positive</td>
				<td><input type="text" id="r_93_1" name="r_93_1" class="numericInput" value=""></td>
			</tr>
		</tbody>
</table>

<br>

<table id="Immunology" class="display" cellspacing="0" width="400px" style="float: left align=center">
		<thead>
			<tr>
				<th colspan="3">IMMUNOLOGY</th>
			</tr>
			<tr>
				<th>Laboratory test</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>CD4 tests done</td>
				<td><input type="text" id="r_104_1" name="r_104_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>CD4 tests positive</td>
				<td><input type="text" id="r_105_1" name="r_105_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Viral Load Tests done</td>
				<td><input type="text" id="r_108_1" name="r_108_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Viral Load Tests positive</td>
				<td><input type="text" id="r_109_1" name="r_109_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Other immunology tests done</td>
				<td><input type="text" id="r_106_1" name="r_106_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Other immunology positive</td>
				<td><input type="text" id="r_107_1" name="r_107_1" class="numericInput" value=""></td>
			</tr>
		</tbody>
</table>

<br>
<table id="Microbiology" class="display" cellspacing="0" width="400px" style="float: left align=center">
		<thead>
			<tr>
				<th colspan="3">MICROBIOLOGY</th>
			</tr>
			<tr>
				<th>Laboratory test</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>ZN for AFBs done</td>
				<td><input type="text" id="r_112_1" name="r_112_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>ZN for AFBs positive</td>
				<td><input type="text" id="r_113_1" name="r_113_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Urine microscopy done</td>
				<td><input type="text" id="r_110_1" name="r_110_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Urine microscopy positive</td>
				<td><input type="text" id="r_111_1" name="r_111_1" class="numericInput" value=""></td>
			</tr>
		</tbody>
</table>
	    

<br>


<table id="clinical_profile" class="display" cellspacing="0" width="400px" style="float: left align=center">
		<thead>
			<tr>
				<th colspan="3">CLINICAL PROFILE</th>
			</tr>
			<tr>
				<th>Laboratory test</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>ALT done</td>
				<td><input type="text" id="r_114_1" name="r_114_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>ALT positive</td>
				<td><input type="text" id="r_115_1" name="r_115_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>AST done</td>
				<td><input type="text" id="r_116_1" name="r_116_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>AST positive</td>
				<td><input type="text" id="r_117_1" name="r_117_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Creatine done</td>
				<td><input type="text" id="r_118_1" name="r_118_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Creatine positive</td>
				<td><input type="text" id="r_119_1" name="r_119_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Glucose done</td>
				<td><input type="text" id="r_120_1" name="r_120_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Glucose positive</td>
				<td><input type="text" id="r_121_1" name="r_121_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Others clinical profile test done</td>
				<td><input type="text" id="r_122_1" name="r_122_1" class="numericInput" value=""></td>
			</tr>
			<tr>
				<td>Others clinical profile positive</td>
				<td><input type="text" id="r_123_1" name="r_123_1" class="numericInput" value=""></td>
			</tr>
		</tbody>
</table>

</form>
