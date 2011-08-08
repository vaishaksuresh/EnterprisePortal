<?php include 'accesscontrol.php';
if (!isset($_POST['submitok'])):?>
<script>
	$(function() {
		$("#datepicker").datepicker();
	});
	$(function() {
		$("button#login, input:submit, a, input:reset", ".buttons").button();
		});

</script>
<div id="datefield" style="float: right;">
	<p>&nbsp;</p>
</div>
<form method="post" action="fleetaddvehicle.php">
	<div id="production" style="clear: both;" align="center">
		<table id="tbproduction" width="100%">
			<tr>
				<td><b>Category</b></td>
				<td><select style="width: 160px;" name="fleetcategory"
					id="fleetcategory">
						<option value="Excavators">Excavator</option>
						<option value="Dumpers">Dumper</option>
						<option value="Compressors">Compressors</option>
						<option value="Generators">Generators</option>
						<option value="Vehicles">Other Vehicles</option>
						<option value="WireSaws">Wire Saw</option>
				</select>
			
			</tr>
			<tr>
				<td><b>Serial Number</b></td>
				<td><input style="width: 160px;" type="text"
					name="fleetserialnumber" id="fleetserialnumber">
				</td>
			</tr>
		</table>
	</div>

	<div id="production" style="clear: both;" align="center">
		<hr>
		<table id="tbproduction" width="100%">
			<tr>
				<td><b>Date of Purchase</b> :</td>
				<td><input style="width: 160px;" type="text" name="dopDate"
					id="dopDate"></td>
			</tr>
			<tr>
				<td style="width: 260px;"><b>Make</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehicleMake"></td>
			</tr>
			<tr>
				<td><b>Model</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehicleModel"></td>
			</tr>
			<tr>
				<td><b>Owner</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehicleOwner"></td>
			</tr>
			<tr>
				<td><b>Purchase Amount</b> :</td>
				<td><input style="width: 160px;" type="text"
					name="vehiclePurchaseAmount"></td>
			</tr>
			<tr>
				<td><b>Description</b> :</td>
				<td><input style="width: 160px;" type="text"
					name="vehicleDescription">
				</td>
			</tr>
		</table>
		<hr>
	</div>


	<div id="production" style="clear: both;" align="center">
		<h3 align="left">Loan Details</h3>
		<table id="tbproduction" width="100%">
			<tr>
				<td style="width: 260px;"><b>Loan Amount</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehicleLoanAmt">
				</td>
			</tr>
			<tr>
				<td><b>Bank Address</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehicleBank"></td>
			</tr>
			<tr>
				<td><b>EMI Paid</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehicleEMI"></td>
			</tr>
			<tr>
				<td><b>Amount Paid</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehicleAmtPaid">
				</td>
			</tr>
			<tr>
				<td><b>Interest Paid</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehicleIntPaid">
				</td>
			</tr>
			<tr>
				<td><b>Total Amount Paid</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehicleTotalPaid">
				</td>
			</tr>
		</table>
		<hr>
	</div>
	<div id="production" style="clear: both;" align="center">
		<h3 align="left">Insurance Details</h3>
		<table id="tbproduction" width="100%">
			<tr>
				<td style="width: 260px;"><b>Sum Assured</b> :</td>
				<td><input style="width: 160px;" type="text"
					name="vehicleSumAssured">
				</td>
			</tr>
			<tr>
				<td><b>From</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehicleFrom"></td>
			</tr>
			<tr>
				<td><b>To</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehicleTo"></td>
			</tr>
			<tr>
				<td><b>Insurance Address</b> :</td>
				<td><input style="width: 160px;" type="text"
					name="vehicleInsuranceAddress"></td>
			</tr>
			<tr>
				<td><b>Premium</b> :</td>
				<td><input style="width: 160px;" type="text" name="vehiclePremium">
				</td>
			</tr>
		</table>
		<hr>
	</div>
	<div id="bottomrow" class="buttons"
		style="clear: both; float: right; padding-right: 300px; padding-bottom: 20px;">
		<input type="submit" name="submitok" value="   OK   " />
	</div>
</form>




<?php else: ?>
<?php

$dateTime=new DateTime($_POST[dopDate]);
$formattedDate = date_format($dateTime, 'Y-m-d');

// echo $_POST['vehicleLoanAmt'];
// echo $_POST['vehicleBank'];
// echo $_POST['vehicleEMI'];
// echo $_POST['vehicleAmtPaid'];
// echo $_POST['vehicleIntPaid'];
// echo $_POST['vehicleTotalPaid'];

// echo $_POST['vehicleSumAssured'];
// echo $_POST['vehicleFrom'];
// echo $_POST['vehicleTo'];
// echo $_POST['vehicleInsuranceAddress'];
// echo $_POST['vehiclePremium'];

dbConnect("vaishaks_pgpl");
$sql="insert into vehicle set serialnumber='$_POST[fleetserialnumber]',
category='$_POST[fleetcategory]',date_of_purchase='$formattedDate',
make='$_POST[vehicleMake]',model='$_POST[vehicleModel]',owner='$_POST[vehicleOwner]',description='$_POST[vehicleDescription]',
purchase_amount='$_POST[vehiclePurchaseAmount]',picturepath='./images/$_POST[fleetcategory].jpg'";
if (!mysql_query($sql)){
	echo mysql_error();
}
$sql = "insert into loan_details set serialnumber='$_POST[fleetserialnumber]',loanamt='$_POST[vehicleLoanAmt]',bankaddress='$_POST[vehicleBank]',
emi='$_POST[vehicleEMI]',amountpaid='$_POST[vehicleAmtPaid]',interestpaid='$_POST[vehicleIntPaid]',totalpaid='$_POST[vehicleTotalPaid]'";
if (!mysql_query($sql)){
	echo mysql_error();
}

$dateTime1=new DateTime($_POST[vehicleFrom]);
$dateTime2=new DateTime($_POST[vehicleTo]);

$formattedDate1 = date_format($dateTime1, 'Y-m-d');
$formattedDate2 = date_format($dateTime2, 'Y-m-d');

$sql = "insert into insurance_details set serialnumber='$_POST[fleetserialnumber]',sumassured='$_POST[vehicleSumAssured]',from='$formattedDate1',
to='$formattedDate2',insuranceaddress='$_POST[vehicleInsuranceAddress]',premium='$_POST[vehiclePremium]'";
if (!mysql_query($sql)){
	echo mysql_error();
}


?>


<script>
	//alert("Vehicle Added. You will be redirected to the homepage now.");
	//window.location='index.php';
</script>






<?php endif;
?>