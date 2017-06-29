<?php 
	include_once '../model/db.php';
	$username = $_REQUEST['user_name'];
	$email=$_REQUEST['email_id'];
	$phone_no= $_REQUEST['user_id'];
	$pass=$_REQUEST['password'];
	$con = db_connect();
	$_SESSION['user_id'] = $_REQUEST;
	$result = insert('`users`',array('name','email','phone_no','password'),array($username,$email,$phone_no,$pass),$con);
	echo $result;