<?php

//$conn = mysqli_connect("localhost", "root", "", "logintest");

//$conn = mysqli_connect("104.196.211.118", "root", "CIS495waterflowmeter", "h20FlowMeter");
//$db = new PDO('mysql:host=104.196.211.118;dbname=h20FlowMeter', 'root', 'CIS495waterflowmeter');


//if (!conn){
	//die("Connection failed: ".mysqli_connect_error());
//}

$host = '104.196.211.118';
$user = 'root';
$pass = 'CIS495waterflowmeter';
$db = 'h20FlowMeter';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);


