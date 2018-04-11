<style>
<?php include 'ind_table.css'; ?>
</style>
<script type="text/javascript">
$(document).ready(function() {
	$("#launch").click(function() {
        url="ctl-ind_query.php";
	var val = $("#ind").val();
	data="ind="+val;
	console.log(data);
	$.post(url,data,function(data){
	  $("#indicator_result").html(data);
	});   
    });
	
	$("#srvtype").change(function() {
        url="ctl-ind_query.php";
	var val = $(this).val();
	data="srvtype="+val;
	console.log(data);
	$.post(url,data,function(data){
	  $("#ind").html(data);
	});   
    });

	function populate (s1, s2){
		var s1 = document.getElementById(s1);
		var s2 = document.getElementById(s2);
		s2.innerHTML = "";
		if(s1.value == "1"){
			var optionArray = ["|", "Total consultations|Total consultations", "Total referals|Total referals", "Positivity malaria|Positivity malaria"];
		} 

		
		else if(s1.value == "2"){
			var optionArray = 
			["|", 
			"Total consultations|Total consultations", 
			"Total referals|Total referals", 
			"Positivity malaria|Positivity malaria"];
		}
		else if(s1.value == "3"){
			var optionArray = 
			["|", 
			"Total admissions|Total admissions", 
			"Total discharges|Total discharges", 
			"Proportional morbidity|Proportional morbidity", 
			"Positivity malaria|Positivity malaria", 
			"Proportional mortality|Proportional mortality"];
		}  
		else if(s1.value == "4"){
			var optionArray = 
			["|", "Total admissions|Total admissions", "Total discharges|Total discharges", "Proportional morbidity|Proportional morbidity", "Positivity malaria|Positivity malaria", "Total procedures|Total procedures", "Women who initiated breast feeding after the first hour after delivery total|Women who initiated breast feeding after the first hour after delivery total"]
		}  
		else if(s1.value == "5"){
			var optionArray = ["|", "Total vaccinations of girls|Total vaccinations of girls", "Total BCG vaccinations|Total BCG vaccinations", "Total Hepatitis B vaccinations|Total Hepatitis B vaccinations"];
		}  
		else if(s1.value == "6"){
			var optionArray = ["|", "Total Hematology tests done|Total consultations", "Total blood transfusion tests done|Total blood transfusion tests done", "Total Parasitology tests done|Total Parasitology tests done"];
		}  
			/*
		else if(s1.value == "7"){
			var optionArray = ["|", "Total PostNatal consultations|Total PostNatal consultations"];
		} 
*/

		for (var option in optionArray){
				var pair =  optionArray[option].split("|");
				var newOption = document.createElement("option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
		}
	}
} );
</script>

<style>
	td { padding-bottom: 15px; }
</style>

<div style="padding-top: 90;">
	<label><b>Choose service</b></label> 
	<br><br>

	<!--loop the service name from table wwhere From database and load form on select value -->

	<select name="service" id="service" onchange="populate(this.id,'selectindicator')">
		<?php 
		include_once 'ctl-db_connection.php';
		$sql = mysqli_query($connection, "SELECT id, name FROM `where`");
		for ($i = 0; $i < mysqli_num_rows($sql); $i++) {
			$row = mysqli_fetch_assoc($sql);
			//echo "<option></option>";
			echo "<option value=\"". $row['id'] . "\">" . $row['name'] . "</option>";
		}
		?>
	</select>

	<br>


	<!--loop the service name from table wwhere From database and load form on select value -->
	<hr />
	<label><b>Choose indicator</b></label> 
	<br><br>

	<select name="selectindicator" id="selectindicator">

	</select>
	
	<br>
	<hr />
	<br>
		
	<p><label><b>Choose service type</b></label></p> 
	<select name="srvtype" id="srvtype">
		<?php 
		include_once 'ctl-db_connection.php';
		$sql = mysqli_query($connection, "SELECT DISTINCT type FROM `indicator`");
		echo "<option value=\"\">-- Select srv type --</option>";
		for ($i = 0; $i < mysqli_num_rows($sql); $i++) {
			$row = mysqli_fetch_assoc($sql);
			//echo "<option></option>";
			echo "<option value=\"". $row['type'] . "\">" . $row['type'] . "</option>";
		}
		?>
	</select>
	
	<br>
	<br>
	<p><label><b>Choose indicator</b></label></p>
	<select name="ind" id="ind">
		<option>-- Select Indicator --</option>
	</select>
	
	<br>
	<br>	
	<p><button id="launch" type="button">Calculate indicator</button></p>
	
	<br>
	<hr />
	<br>
	
	<table class="blueTable" id="indicator_result">
	
	</table>

</div>
		
<!--
	<!DOC TYPE html>
<html>
<head>
<script>
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Chevy"){
		var optionArray = ["|","camaro|Camaro","corvette|Corvette","impala|Impala"];
	} else if(s1.value == "Dodge"){
		var optionArray = ["|","avenger|Avenger","challenger|Challenger","charger|Charger"];
	} else if(s1.value == "Ford"){
		var optionArray = ["|","mustang|Mustang","shelby|Shelby"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>
</head>
<body>
<h2>Choose Your Car</h2>
<hr />
Choose Car Make:
<select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
  <option value=""></option>
  <option value="Chevy">Chevy</option>
  <option value="Dodge">Dodge</option>
  <option value="Ford">Ford</option>
</select>
<hr />
Choose Car Model:
<select id="slct2" name="slct2"></select>
<hr />
</body>
</html>