<?php
session_start();
$hostname_conexao = "localhost";
$database_conexao = "duosystem";
$username_conexao = "root";
$password_conexao = "";

try 
{
    $conn = new PDO('mysql:host='.$hostname_conexao.';dbname='.$database_conexao, $username_conexao, $password_conexao,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) 
{
    echo 'ERROR: ' . $e->getMessage();
}

?>