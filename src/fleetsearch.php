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
<p>&nbsp;</p>
</div>
<div id="production" style="clear: both;" align="center">
<table id="tbproduction" width="100%">
	<tr>
		<td><b>Category</b></td>
		<td><select style="width:160px;">
			<option value="Excavators"<?php if ($_POST['fleetvehicle']=='Excavators'):?>selected="selected"<?php endif;?>>Excavator</option>
			<option value="Dumpers"<?php if ($_POST['fleetvehicle']=='Dumpers'):?>selected="selected"<?php endif;?>>Dumper</option>
			<option value="Compressors"<?php if ($_POST['fleetvehicle']=='Compressors'):?>selected="selected"<?php endif;?>>Compressors</option>
			<option value="Generators"<?php if ($_POST['fleetvehicle']=='Generators'):?>selected="selected"<?php endif;?>>Generators</option>
			<option value="Vehicles"<?php if ($_POST['fleetvehicle']=='Vehicles'):?>selected="selected"<?php endif;?>>Other Vehicles</option>
			<option value="WireSaws"<?php if ($_POST['fleetvehicle']=='WireSaws'):?>selected="selected"<?php endif;?>>Wire Saw</option>
		</select>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Add New</a></td>
	</tr>
	<tr>
		<td><b>Serial Number</b></td>
		<td><select style="width:160px;">
			<option value="Category">Select</option>
			<option value="Alagangi">Number 2</option>
		</select></td>
	</tr>
</table>
</div>
<div id="bottomrow"
	style="clear: both; padding-left: 350px;">
<div class="demo">

<button>View Details</button>

</div>
</div>
