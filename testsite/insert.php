<?php

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
if($name && $email && $password)
{
	
	mysql_connect("localhost", "root" ,"") or die("ERrOR .connection to ssrver lost");
	mysql_select_db("testsite");
	$username= mysql_query("SELECT name FROM users WHERE name='$name'");
	$count= mysql_num_rows($username);
	if($count!=0){
		die("username exists");
	}
	mysql_query("INSERT INTO users(name,email,password) VALUES('$name' ,'$email' , '$password') ");
	
	
	echo "$registered was inserted";
}
else{
	echo "login failed";
	
	
}


mysql_close();



?>