<?php include 'accesscontrol.php'?>
<script type="text/javascript">
$(function() {
	$("a#fleetExcavator").click(function() {
		
		$("div#maincontents").load("fleetsearch.php");
	});
});
$(function() {
	$("a#fleetDumpers").click(function() {
		
		$("div#maincontents").load("fleetsearch.php");
	});
});
$(function() {
	$("a#fleetCompressors").click(function() {
		
		$("div#maincontents").load("fleetsearch.php");
	});
});
$(function() {
	$("a#fleetGenerators").click(function() {
		
		$("div#maincontents").load("fleetsearch.php");
	});
});
$(function() {
	$("a#fleetVehicles").click(function() {
		
		$("div#maincontents").load("fleetsearch.php");
	});
});
$(function() {
	$("a#fleetWiresaw").click(function() {
		
		$("div#maincontents").load("fleetsearch.php");
	});
});
</script>
<div id="datefield" style="float: right;">
<p>&nbsp;</p>
</div>
<div id="production" style="clear: both;" align="center">
<table id="tbproduction" width="100%">
	<tr>
		<td><a id="fleetExcavator" href="#"><img align="middle" height="150px" width="150px" src="./images/Excavator.jpg"></a></td>
		<td><a id="fleetDumpers" href="#"><img height="150px" width="150px" src="./images/Dumpers.jpg"></a></td>
		<td><a id="fleetCompressors" href="#"><img height="150px" width="150px" src="./images/Compressors.jpg"></a></td>
	</tr>
	<tr>
		<td><a id="fleetGenerators" href="#"><img height="150px" width="150px" src="./images/Generators.jpg"></a></td>
		<td><a id="fleetVehicles" href="#"><img height="150px" width="150px" src="./images/Vehicles.gif"></a></td>
		<td><a id="fleetWiresaw" href="#"><img height="150px" width="150px" src="./images/Wire saw.jpg"></a></td>
	</tr>
</table>
</div>
