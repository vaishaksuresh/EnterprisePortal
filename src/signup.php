<?php
session_start();
if(!isset($_SESSION['user'])){
	if (isset($_POST['user'])&&isset($_POST['password'])){
		$username = $_POST['user'];
		$password = $_POST['password'];

		dbConnect("vaishaks_pgpl");
		$sql = "SELECT * FROM user WHERE userid = '$username'";
		$result = mysql_query($sql);
		if (!$result) {
			error('A database error occurred in processing your '. 'submission.\\nIf this error persists, please '. 'contact you@example.com.');
		}
		while ($row = mysql_fetch_array($result)){
			$dbpass = $row[2];
		}
		if($dbpass==md5($password)){
			$_SESSION['user']=$username;
			$_SESSION['password']=$password;
		}
	}else{?>
	
	<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" href="css/pgpl1.css">
<link rel="stylesheet" type="text/css"
	href="css/start/jquery-ui-1.8.7.custom.css">
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-ui.min.js"></script>

<script>
	$(function() {
		$("#datepicker").datepicker();
	});
	$(function() {
		$("button#login, input:submit, a", ".demo").button();
		$("button#signup, input:submit, a", ".demo").button();
		$("button#login, input:submit, a", ".demo").click(
		function() {
					if ($("#user").val() == '' || $("#password").val() == '') {
						alert('Username or Password cannot be blank!');
						return false;
					}
				});
	$("button#signup", ".demo").click(
			function() {
				window.location.href= 'register.php';

			});
});
</script>
<title>PHANEESH GRANITE Private Limited</title>
</head>
<body>
<table align="center" height="100%" width="100%">
	<tr valign="top">

		<td class="leftgradient" width="10%" height="100%">&nbsp;</td>
		<td width="80%">
		<div id="header">
		<div id="topline"></div>
		<div id="logout"><u>Logout</u></div>
		<div style="float: left; width: 100%">
		<div style="float: left;"><img src="images/Logo.jpg" width="150px"
			height="80px" align="left"></div>
		<div style="float: left; padding-top: 35px;"><b>Phaneesh Granite
		Private Limited</b></div>
		<div style="float: right; padding-top: 35px;">ERP System</div>
		</div>
		</div>
		<div id="nav">
		<table width="100%" height="40px">
			<tr>
				<td width="17%" id="username">Welcome!</td>
				<td width="83%" id="breadcrumb">Login</td>
			</tr>
		</table>
		</div>
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="login">
		<div id="content" style="padding-left: 250px; padding-top: 50px;">
		<div id="production" style="clear: both;" align="center">

		<table id="tbproduction" width="100%">
			<tr>
				<td><b>Username</b></td>
				<td><input style="width: 160px;" type="text" id="user" name="user"></td>
			</tr>
			<tr>
				<td><b>Password</b></td>
				<td><input style="width: 160px;" type="password" id="password"
					name="password"></td>
			</tr>
		</table>

		</div>
		<div id="bottomrow"
			style="clear: both; float: right; padding-right: 300px; padding-bottom: 20px;">
		<div class="demo">

		<button id="login">Login</button>
		<button id="signup">Register</button>
		</div>
		</div>

		</div>
		</form>
		<div id="footer"></div>
		</td>
		<td class="rightgradient" width="10%">&nbsp;</td>
	</tr>
</table>
</body>
</html>
		
<?php 	}
}
?>