<?php 
//phpinfo();
include 'db.php';
dbConnect("ppgl");
$sql = "select * from user";
$result = mysql_query($sql);
$username = mysql_result($result,0,'userid');
while ($row = mysql_fetch_array($result)){
	$id = $row[0];
	$userid = $row[1];
	$password = $row[2];
	$fullname = $row[3];
	$email = $row[4];
	echo $id," ",$userid," ",$password," ",$fullname," ",$email;
}
?>