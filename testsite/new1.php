<?php

if(isset($REQUEST['submit'])){
$search=$_GET['search'];
$terms=explode(" ",$search);
$query = "SELECT * FROM users WHERE  ";
$i=0;
foreach($terms as $each){
$i++;
if($i==1){
$query .= "name LIKE '%$each%' ";
}else{
query .="OR name LIKE '%$each%' ";
mysql_connect("localhost" , "root" , "");
mysql_select_db("testsite");
$query=mysql_query($query);
$num =mysql_num_rows($query);
if($num > 0 && &search!=""){
while($row = mysql_fetch_assoc($querys)){
$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
echo "$name <br />$email<br />";
} 
else{
echo "no results found";
}
mysql_close();
else{

echo "no data found on our server";   

}



?>