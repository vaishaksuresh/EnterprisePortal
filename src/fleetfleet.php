<?php include 'accesscontrol.php'?>
<?php
dbConnect("vaishaks_pgpl");
$sql = "SELECT * FROM fleet";
$result = mysql_query($sql);
if (!$result) {
	error('A database error occurred in processing your '. 'submission.\\nIf this error persists, please '. 'contact you@example.com.');
}
$numrows = mysql_num_rows($result);
?>
<table id="tblisting" width="100%">
	<tr id="header">
		<th>#</th>
		<th>Vehicle</th>
		<th>Vehicle Category</th>
		<th>Date</th>
		<th>Check In</th>
		<th>Check Out</th>
		<th>Break</th>
		<th>Total Hours</th>
		<th>Cumulative Hours<br>
		(Month)</th>
	</tr>
	<?php
	$i=0;
	for ($i=0;$i<$numrows;$i++){
		$slno = $i%2==0?"evenrow":"oddrow";
		$vehicle = mysql_result($result,$i,"vehiclename");
		$vehiclecategory =mysql_result($result,$i,"vehiclecategory");
		$date = mysql_result($result,$i,"date");
		$checkin = mysql_result($result,$i,"checkin");
		$checkout = mysql_result($result,$i,"checkout");
		$break = mysql_result($result,$i,"break");
		$totalhours = mysql_result($result,$i,"totalhours");
		$cumulativehours = mysql_result($result,$i,"cumulativehours");
		?>
	<tr id="<?php echo $slno;?>">
		<td><?php echo $i+1;?></td>
		<td><?php echo $vehicle;?></td>
		<td><?php echo $vehiclecategory;?></td>
		<td><?php echo $date;?></td>
		<td><?php echo $checkin;?></td>
		<td><?php echo $checkout;?></td>
		<td><?php echo $break;?></td>
		<td><?php echo $totalhours;?></td>
		<td><?php echo $cumulativehours;?></td>
	</tr>
	<?php }?>
</table>
