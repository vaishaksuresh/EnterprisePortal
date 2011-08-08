<?php include 'accesscontrol.php';
unset($_SESSION['fleetvehicle']);
?>
<script type="text/javascript">
$(function() {
	$("a#fleetExcavator").click(function() {

		$("div#maincontents").load("fleetsearch.php",{fleetvehicle:"Excavators"});
	});
});
$(function() {
	$("a#fleetDumpers").click(function() {
		
		$("div#maincontents").load("fleetsearch.php",{fleetvehicle:"Dumpers"});
	});
});
$(function() {
	$("a#fleetCompressors").click(function() {
	
		$("div#maincontents").load("fleetsearch.php",{fleetvehicle:"Compressors"});
	});
});
$(function() {
	$("a#fleetGenerators").click(function() {
		$("div#maincontents").load("fleetsearch.php",{fleetvehicle:"Generators"});
		
	});
});
$(function() {
	$("a#fleetVehicles").click(function() {
		
		$("div#maincontents").load("fleetsearch.php",{fleetvehicle:"Vehicles"});
	});
});
$(function() {
	$("a#fleetWiresaw").click(function() {
		
		$("div#maincontents").load("fleetsearch.php",{fleetvehicle:"WireSaws"});
		
	});
});
</script>
<div id="datefield" style="float: right;">
<p>&nbsp;</p>
</div>
<div id="production" style="clear: both;" align="center">
<table id="tbproduction" width="100%">
	<tr>
		<td><center><a id="fleetExcavator" href="#"><img align="middle" height="150px"
			width="150px" src="./images/Excavators.jpg"></a>
			<br><b>Excavators</b></center></td>
		<td><center><a id="fleetDumpers" href="#"><img height="150px" width="150px"
			src="./images/Dumpers.jpg"></a><br><b>Dumpers</b></center></td>
		<td><center><a id="fleetCompressors" href="#"><img height="150px"
			width="150px" src="./images/Compressors.jpg"></a><br><b>Compressors</b></center></td>
	</tr>
	<tr>
		<td><center><a id="fleetGenerators" href="#"><img height="150px" width="150px"
			src="./images/Generators.jpg"></a><br><b>Generators</b></center></td>
		<td><center><a id="fleetVehicles" href="#"><img height="150px" width="150px"
			src="./images/Vehicles.gif"></a><br><b>Other Vehicles</b></center></td>
		<td><center><a id="fleetWiresaw" href="#"><img height="150px" width="150px"
			src="./images/Wire saw.jpg"></a><br><b>Wire Saw</b></center></td>
	</tr>
</table>
</div>
