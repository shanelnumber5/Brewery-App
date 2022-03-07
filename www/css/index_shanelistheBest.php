<?php 
//The server returns JSON data 
$arr=array('name'=>'Log the MT Breweries You Visit','name2'=>'Directions to Each Brewery','name3'=>'Brewery Hours and Information','name4'=>'Pictures and Social Media Information','name5'=>'How to Purchase a Paper Passport'); 
$result=json_encode($arr); 

$callback=$_GET['callback']; 
echo $callback."($result)";
?>