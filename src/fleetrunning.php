<?php include 'accesscontrol.php'?>
<script>
	$(function() {
		$("#datepicker").datepicker();
	});
	$(function() {
		$("button, input:submit, a", ".demo").button();
		$("button, input:submit, a", ".demo").click(function() {
			$("#sidebar ul li#fleetfleet").click();
			return false;
		});
	});
</script>
<div id="datefield" style="float: right;">
<p>Date: <input type="text" id="datepicker"></p>
</div>
<div id="production" style="clear: both;" align="center">
<table id="tbproduction" width="100%">
	<tr>
		<td><b>Vehicle Category</b></td>
		<td><select style="width:160px;">
			<option value="Category">Category 1</option>
			<option value="Alagangi">Category 2</option>
		</select></td>
	</tr>
	<tr>
		<td><b>Vehicle Number</b></td>
		<td><select style="width:160px;">
			<option value="Category">Number 1</option>
			<option value="Alagangi">Number 2</option>
		</select></td>
	</tr>
	<tr>
		<td><b>Driver</b></td>
		<td><input style="width:160px;" type="text" id="pitid"></td>
	</tr>
	<tr>
		<td><b>Running Hours</b></td>
		<td><input style="width:160px;" type="text" id="pitid"></td>
	</tr>
	<tr>
		<td><b>Check In Time</b></td>
		<td> <input style="width:160px;" type="text" id="pitid"> <b>Check Out Time</b> <input style="width:160px;" type="text" id="pitid"></td>
	</tr>
	<tr>
		<td><b>Break (hrs)</b></td>
		<td><input style="width:160px;" type="text" id="pitid"></td>
	</tr>
	<tr>
		<td><b>Total Running Hours</b></td>
		<td style="color: red;"><b>-- hrs</b></td>
	</tr>
	<tr>
		<td><b>Remarks</b></td>
		<td><textarea rows="4" style="width: 400px;"></textarea></td>
	</tr>
</table>
</div>
<div id="bottomrow"
	style="clear: both; float: right; padding-right: 30px;">
<div class="demo">

<button>Submit</button>

</div>
</div>