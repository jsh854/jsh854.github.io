<?php
session_start();

$_SESSION['name']=$_POST['name'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($name && $lastname && $username && $email && $password && $cpassword)
{
mysql_connect("localhost","root","") or die("connection lost");
mysql_select_db("test");
mysql_query("INSERT INTO login(name,lastname,username,email,password) VALUES('$name' ,'$lastname','$username','$email','$password')");
 echo "request sent to the server";
 }else
 {
 echo "server dead";
 }
 mysql_close();
 ?>