<?php

$servername ="localhost";
$dbUsername= "root";
$dbPassword= "";
$dbName= "aplikacja";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
  die("Connection faild: ".mysqli_connect_error());
}
