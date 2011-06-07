<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<?php
include 'db.php';
include 'common.php';

$username = $_POST['user'];
$password = $_POST['password'];

dbConnect("ppgl");
$sql = "SELECT * FROM user WHERE userid = '$username'";
$result = mysql_query($sql);
if (!$result) {
	error('A database error occurred in processing your '. 'submission.\\nIf this error persists, please '. 'contact you@example.com.');
}
while ($row = mysql_fetch_array($result)){
	$dbpass = $row[2];
	$fullname = $row[3];
}
if($dbpass==md5($password)){
	session_start();
	$_SESSION['user']=$username;
	$_SESSION['fullname']=$fullname;
	?>
<head>
<script language="JavaScript"> window.location.href="index.php"; </script>
</head>
<body>
Hi! You've Successfuly Logged in
</body>
	<?php }else {?>
<head>
<title>Not Logged in!</title>
</head>
<body>
Invalid Login!
</body>
	<?php }
?>
</html>
