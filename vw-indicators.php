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