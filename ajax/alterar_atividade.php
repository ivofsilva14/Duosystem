<?php
require_once('../Connections/conexao.php');

$id_atividade  = $_POST['id_atividade'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data_inicio = implode('-',array_reverse(explode('/',$_POST['data_inicio'])));
$data_fim = implode('-',array_reverse(explode('/',$_POST['data_fim'])));
$status = $_POST['status'];
$situacao = $_POST['situacao'];

$insert = "UPDATE atividade SET id_status_atividade=?,nome=?,descricao=?,data_inicio=?,data_fim=?,situacao=? WHERE id_atividade = ?";

$sel = $conn->prepare($insert);
$sel->bindParam(1,$status);
$sel->bindParam(2,$nome);
$sel->bindParam(3,$descricao);
$sel->bindParam(4,$data_inicio);
$sel->bindParam(5,$data_fim);
$sel->bindParam(6,$situacao);
$sel->bindParam(7,$id_atividade);
	
$sel->execute();

$dados['sucesso'] = (string) 1;
echo json_encode($dados);
?>