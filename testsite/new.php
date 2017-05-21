<?php

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

if($name && $email && $password)
{
mysql_connect("localhost","root","") or die("connection to server lost");
mysql_select_db("testsite");
$username= mysql_query("SELECT name FROM users WHERE name='$name'");
	$count= mysql_num_rows($username);
	if($count!=0){
		die("username exists");
	}
	$emailid=mysql_query("SELECT email FROM users WHERE email='$email'");
	$emy=mysql_num_rows($emailid);
	if($emy!=0){
		die("email exists");
	}
	$passwordmd5=md5($password);
mysql_query("INSERT INTO users(name,email,password) VALUES('$name','$email','$passwordmd5')");
echo "your request has been sent";
}
else{
echo "connection required";}
mysql_close();








?>