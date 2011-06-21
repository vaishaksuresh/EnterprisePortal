<?php
include 'db.php';
include 'common.php';
if (!isset($_POST['submitok'])): // Display the user signup form ?>
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
		$("button#login, input:submit, a, input:reset", ".buttons").button();
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
		<div id="content" style="padding-left: 250px; padding-top: 50px;">
		<div id="production" style="clear: both;" align="center">
		<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
		<table id="tbproduction" width="100%">
			<tr>
				<td align="right">
				<p>User ID</p>
				</td>
				<td><input name="newid" type="text" maxlength="100" size="25" /> <font
					color="orangered" size="+1"><tt><b>*</b></tt></font></td>
			</tr>
			<tr>
				<td align="right">
				<p>Full Name</p>
				</td>
				<td><input name="newname" type="text" maxlength="100" size="25" /> <font
					color="orangered" size="+1"><tt><b>*</b></tt></font></td>
			</tr>
			<tr>
				<td align="right">
				<p>E-Mail Address</p>
				</td>
				<td><input name="newemail" type="text" maxlength="100" size="25" />
				<font color="orangered" size="+1"><tt><b>*</b></tt></font></td>
			</tr>
			<tr>
				<td align="right">
				<p>Password</p>
				</td>
				<td><input name="newpassword" type="password" maxlength="12"
					size="25" /> <font color="orangered" size="+1"><tt><b>*</b></tt></font></td>
			</tr>
			<tr>
				<td align="right" colspan="2">
				<div id="bottomrow" class="buttons"
					style="clear: both; float: right; padding-right: 300px; padding-bottom: 20px;">
				<input type="reset" value="Reset" /> <input type="submit"
					name="submitok" value="   OK   " /></div>
				</td>

			</tr>
		</table>
		</form>
		</div>

		</div>
		<div id="footer"></div>
		</td>
		<td class="rightgradient" width="10%">&nbsp;</td>
	</tr>
</table>
</body>
</html>
<?php else: // Process signup submission dbConnect('sessions');
if ($_POST['newid']=='' or $_POST['newname']=='' or $_POST['newemail']=='') {
	error('One or more required fields were left blank.\\n'. 'Please fill them in and try again.');
}
// Check for existing user with the new id
dbConnect("pgpl");
$sql = "SELECT COUNT(*) FROM user WHERE userid = '$_POST[newid]'";
$result = mysql_query($sql);
if (!$result) {
	error('A database error occurred in processing your '. 'submission.\\nIf this error persists, please '. 'contact you@example.com.');
}
if (@mysql_result($result,0,0)>0) {
	error('A user already exists with your chosen userid.\\n'. 'Please try another.');
}
$newpass = md5($_POST['newpassword']);
$sql = "INSERT INTO user SET userid = '$_POST[newid]', password = '$newpass', fullname = '$_POST[newname]', email = '$_POST[newemail]'";
if (!mysql_query($sql))
error('A database error occurred in processing your '. 'submission.\\nIf this error persists, please '. 'contact you@example.com.');
?>
<p><strong>User registration successful!</strong></p>
<p>Your userid and password have been emailed to <strong><?=$_POST[newemail]?></strong>,
the email address you just provided in your registration form. To log
in, click <a href="index.php">here</a> to return to the login page, and
enter your new personal userid and password.</p>
</body>
</html>
<?php echo $_POST['newpassword'],$newpass; endif; ?>