<?php
$sql  = "SELECT nome,descricao,descricao,data_inicio,data_fim,situacao,id_status_atividade ";
$sql .= "FROM atividade ";
$sql .= "WHERE id_atividade = ? ";

$sel = $conn->prepare($sql);
$sel->bindParam(1,$_GET['id_atividade']);
			
$sel->execute();
$row = $sel->fetch(PDO::FETCH_OBJ);

$nome = $row->nome;
$descricao = $row->descricao;
$data_inicio = $row->data_inicio;
$data_fim  = $row->data_fim;
$situacao  = $row->situacao;
$status  = $row->id_status_atividade;
?>