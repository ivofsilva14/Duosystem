<?php
require_once('../Connections/conexao.php');

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data_inicio = implode('-',array_reverse(explode('/',$_POST['data_inicio'])));
$data_fim = implode('-',array_reverse(explode('/',$_POST['data_fim'])));
$status = $_POST['status'];
$situacao = $_POST['situacao'];

$insert = "INSERT INTO atividade VALUES ('',?,?,?,?,?,?)";

$sel = $conn->prepare($insert);
$sel->bindParam(1,$status);
$sel->bindParam(2,$nome);
$sel->bindParam(3,$descricao);
$sel->bindParam(4,$data_inicio);
$sel->bindParam(5,$data_fim);
$sel->bindParam(6,$situacao);
	
$sel->execute();

$dados['sucesso'] = (string) 1;
echo json_encode($dados);
?>