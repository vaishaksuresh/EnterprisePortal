<?php include 'accesscontrol.php'?>
<script>
	$(function() {
		$("#datepicker").datepicker();
	});
	$(function() {
		$("button, input:submit, a", ".demo").button();
		$("button, input:submit, a", ".demo").click(function() {

			var $cat = $("select#fleetcategory").val();
			var $serial = $("select#fleetserialnumber").val();

			if($serial != ''){
			$("div#maincontents").load("fleetsearch.php",{cat:$cat, serial:$serial,fleetvehicle:$cat});
			}else{
				$("div#maincontents").load("fleetsearch.php",{fleetvehicle:$cat});
			}
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
		<td><select style="width: 160px;" id="fleetcategory">
			<option value="Excavators"
			<?php if ($_POST['fleetvehicle']=='Excavators'):?>
				selected="selected" <?php endif;?>>Excavator</option>
			<option value="Dumpers"
			<?php if ($_POST['fleetvehicle']=='Dumpers'):?> selected="selected"
			<?php endif;?>>Dumper</option>
			<option value="Compressors"
			<?php if ($_POST['fleetvehicle']=='Compressors'):?>
				selected="selected" <?php endif;?>>Compressors</option>
			<option value="Generators"
			<?php if ($_POST['fleetvehicle']=='Generators'):?>
				selected="selected" <?php endif;?>>Generators</option>
			<option value="Vehicles"
			<?php if ($_POST['fleetvehicle']=='Vehicles'):?> selected="selected"
			<?php endif;?>>Other Vehicles</option>
			<option value="WireSaws"
			<?php if ($_POST['fleetvehicle']=='WireSaws'):?> selected="selected"
			<?php endif;?>>Wire Saw</option>
		</select>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Add New</a></td>
	</tr>
	<tr>
		<td><b>Serial Number</b></td>
		<td><select style="width: 160px;" id="fleetserialnumber">
		<?php
		dbConnect("vaishaks_pgpl");
		$category = $_POST['fleetvehicle'];
		//error("SELECT serialnumber FROM vehicles WHERE category = '$category'");
		$sql = "SELECT serialnumber FROM vehicle WHERE category = '$category'";
		$result = mysql_query($sql);
		if (!$result) {
			error('A database error occurred in processing your '.
			'submission.\\nIf this error persists, please '. 
			'contact you@example.com.');
		}
		while ($row = mysql_fetch_array($result)){
			?>
			<option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
			<?php }
			?>
		</select></td>
	</tr>
</table>
</div>
<div id="bottomrow" style="clear: both; padding-left: 350px;">
<div class="demo">
<button>View Details</button>
</div>
</div>
			<?php if($_POST['cat']!=''&&$_POST['serial']!=''){?>

<div id="production" style="clear: both;" align="center">
<hr>
<table id="tbproduction" width="100%">

<?php

$cat =  $_POST['cat'];
$serial =  $_POST['serial'];

dbConnect("vaishaks_pgpl");
$sql = "select * from vehicle where serialnumber='$serial'";
$result = mysql_query($sql);
if (!$result) {
	error('A database error occurred in processing your '.
	'submission.\\nIf this error persists, please '. 
	'contact you@example.com.');
}
while ($row = mysql_fetch_array($result)){
	$dop = $row[2];
	$make = $row[3];
	$model = $row[4];
	$owner = $row[5];
	$puramt = $row[6];
	$desc = $row[7];
	$imagepath = $row[8];
}

?>
	<tr>
		<td><b>Date of Purchase</b> : <?php echo $dop;?></td>
		<td rowspan="6">
		<center><img src="<?php echo $imagepath;?>" height="150px"
			width="150px" /></center>
		</td>
	</tr>
	<tr>
		<td><b>Make</b> : <?php echo $make;?></td>
	</tr>
	<tr>
		<td><b>Model</b> : <?php echo $model;?></td>
	</tr>
	<tr>
		<td><b>Owner</b> : <?php echo $owner;?></td>
	</tr>
	<tr>
		<td><b>Purchase Amount</b> : <?php echo $puramt;?></td>
	</tr>
	<tr>
		<td><b>Description</b> : <?php echo $desc;?></td>
	</tr>
</table>
<hr>
</div>

<div id="production" style="clear: both;" align="center">
<h3 align="left">RC Details</h3>
<table id="tbproduction" width="100%">
	<tr>
		<th>File Path</th>
		<th>Date of Upload</th>
		<th>Description</th>
	</tr>
	<?php
	dbConnect("vaishaks_pgpl");
	$sql = "select * from vehicle_rc_details where serialnumber='$serial'";
	$result = mysql_query($sql);
	if (!$result) {
		error('A database error occurred in processing your '.
	'submission.\\nIf this error persists, please '. 
	'contact you@example.com.');
	}
	while ($row = mysql_fetch_array($result)){
		?>
	<tr>
		<td><a href="<?php echo $row[3];?>" target="_blank">PDF</a></td>
		<td><?php echo $row[1];?></td>
		<td><?php echo $row[2];?></td>
	</tr>
	<?php }
	?>
</table>
<hr>
</div>
<div id="production" style="clear: both;" align="center">
<h3 align="left">Loan Details</h3>
<table id="tbproduction" width="100%">
<?php
dbConnect("vaishaks_pgpl");
$sql = "select * from loan_details where serialnumber='$serial'";
$result = mysql_query($sql);
if (!$result) {
	error('A database error occurred in processing your '.
	'submission.\\nIf this error persists, please '. 
	'contact you@example.com.');
}
while ($row = mysql_fetch_array($result)){
	$loanamt = $row[1];
	$bank = $row[2];
	$emi = $row[3];
	$amtpaid = $row[4];
	$intpaid = $row[5];
	$totalpaid = $row[6];
}
?>
	<tr>
		<td><b>Loan Amount</b> : <?php echo $loanamt;?></td>
	</tr>
	<tr>
		<td><b>Bank Address</b> : <?php echo $bank;?></td>
	</tr>
	<tr>
		<td><b>EMI Paid</b> : <?php echo $emi;?></td>
	</tr>
	<tr>
		<td><b>Amount Paid</b> : <?php echo $amtpaid;?></td>
	</tr>
	<tr>
		<td><b>Interest Paid</b> : <?php echo $intpaid;?></td>
	</tr>
	<tr>
		<td><b>Total Amount Paid</b> : <?php echo $totalpaid;?></td>
	</tr>
</table>
<hr>
</div>
<div id="production" style="clear: both;" align="center">
<h3 align="left">Insurance Details</h3>
<table id="tbproduction" width="100%">
<?php
dbConnect("vaishaks_pgpl");
$sql = "select * from insurance_details where serialnumber='$serial'";
$result = mysql_query($sql);
if (!$result) {
	error('A database error occurred in processing your '.
	'submission.\\nIf this error persists, please '. 
	'contact you@example.com.');
}
while ($row = mysql_fetch_array($result)){
	$sumassured = $row[1];
	$from = $row[2];
	$to = $row[3];
	$insureanceaddress = $row[4];
	$premium = $row[5];
}
?>
	<tr>
		<td><b>Sum Assured</b> : <?php echo $sumassured;?></td>
	</tr>
	<tr>
		<td><b>From</b> : <?php echo $from;?></td>
	</tr>
	<tr>
		<td><b>To</b> : <?php echo $to;?></td>
	</tr>
	<tr>
		<td><b>Insurance Address</b> : <?php echo $insureanceaddress;?></td>
	</tr>
	<tr>
		<td><b>Premium</b> : <?php echo $premium;?></td>
	</tr>
</table>
<hr>
</div>
<?php }?>
