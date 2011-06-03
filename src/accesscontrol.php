<?php
include_once 'common.php';
include_once 'db.php';
session_start();
$uid = isset($_POST['uid']) ? $_POST['uid'] : $_SESSION['uid']; 
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : $_SESSION['pwd'];