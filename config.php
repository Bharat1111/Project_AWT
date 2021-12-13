
<?php

$serverName="localhost";
$dbUserName="root";
$dbpwd="";
$dbBaseName="crud";

$mysqli= mysqli_connect($serverName,$dbUserName,$dbpwd,$dbBaseName);

if(!$mysqli){
    die("connection failed " .mysqli_connect_error());
}
?>