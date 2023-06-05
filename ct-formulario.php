<?php
session_start;
$host ="localhost";
$user ="root";
$pass="123123";
$banco ="academia";

$conexao= mysqli_connect($host,$user,$pass,$banco);
if(!$conexao){
    die("Ouve um erro:" .mysqli_error());
}
?>