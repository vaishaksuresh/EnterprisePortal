<?php echo $_POST['fleetvehicle'];
session_start();
alert("Hi");
$_SESSION['fleetvehicle']=$_POST['fleetvehicle'];
exit();
?>