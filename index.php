<?php require_once('Connections/conexao.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex,nofollow">
<title>Teste Duosystem</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="js/jquery-accordion/jquery-accordion.css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-accordion/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="200" valign="top">
        <div id="menu_left">
            <ul id="accordion">
              <li class="item"> <a href="#" class="item">Atividades</a>
                <ul class="g1">
                  <li class="r_01"> <a href="index.php?p=r_1&g=g1">• Consulta</a></li>
                  <li class="r_02"> <a href="#" id="insercao">• Inserção</a></li>
                </ul>
              </li>
            </ul>
        </div>
    </td>
    <td valign="top"><div id="content_right">
        <h1>Duosystem Consulta</h1>
        <form action="" name="filtrar" method="get" enctype="multipart/form-data">
         
          <div id="filtro">
          	 <input type="submit" name="submit" value="Consultar" />
             <label>
            	<strong>Status:</strong>
                <select name="status">
                	<option value="">Todos</option>
                    <?php
                    echo($_GET['status'] == '1')?'<option value="1"  selected="selected">Pendente</option>':'<option value="1">Pendente</option>';
                    echo($_GET['status'] == '2')?'<option value="2"  selected="selected">Em Desenvolvimento</option>':'<option value="2">Em Desenvolvimento</option>';
                    echo($_GET['status'] == '3')?'<option value="3"  selected="selected">Em Teste</option>':'<option value="3">Em Teste</option>';
                    echo($_GET['status'] == '4')?'<option value="4"  selected="selected">Concluído</option>':'<option value="4">Concluído</option>';
                    ?>
                </select>
        	</label>
            <label>
            	<strong>Situacao:</strong>
                <select name="situacao">
                    <?php
                    echo($_GET['situacao'] == '1')?'<option value="1"  selected="selected">Ativo</option>':'<option value="1">Ativo</option>';
                    echo($_GET['situacao'] == '0')?'<option value="0"  selected="selected">Inativo</option>':'<option value="0">Inativo</option>';
                    ?>
                </select>
        	</label>
          </div>
        </form>
        
        <!-- conteudo do relatorio -->
        <div id="relatorio">
        <?php
		if(!empty($_GET['situacao']))
		{
			if($_GET['status'] != '')
				$where_status = "AND a.id_status_atividade = ? ";
			else
				$where_status = '';
				
			$sql  = "SELECT a.id_atividade,a.nome,a.descricao,a.descricao,a.data_inicio,a.data_fim,a.situacao,st.descricao AS status_atividade,a.id_status_atividade ";
			$sql .= "FROM atividade a ";
			$sql .= "INNER JOIN status_atividade st ON (a.id_status_atividade = st.id_status_atividade) ";
			$sql .= "WHERE a.situacao = ?  $where_status ";

			$sel = $conn->prepare($sql);
			$sel->bindParam(1,$_GET['situacao']);
			
			if($_GET['status'] != '')
				$sel->bindParam(2,$_GET['status']);
			
			$sel->execute();
			$contador_total = $sel->rowCount();
	
			if ($contador_total > 0) 
			{
				echo'
				<table width="100%" border="0" cellspacing="0" cellpadding="0" id="conteudo">
					<tr class="titulo">
						<td>Nome</td>
						<td>Descrição</td>
						<td>Data Início </td>
						<td>Data Fim </td>
						<td>Status</td>
						<td>Situação</td>
						<td></td>
					</tr>';
			}
			while($row = $sel->fetch(PDO::FETCH_OBJ))
			{
				$id_atividade = $row->id_atividade;
				$nome = $row->nome;
				$descricao = $row->descricao;
				$data_inicio = $row->data_inicio;
				$data_fim  = $row->data_fim;
				$situacao  = ($row->situacao == 1)?'Ativo':'Inativo';
				$descricao  = $row->status_atividade;
				$id_status_atividade  = $row->id_status_atividade;	
				
				if($id_status_atividade == 4)
					$cor = 'style="background:#CFF"';
				else
					$cor = '';
					
				echo '
				<tr '.$cor.'>
					<td>'.$nome.'</td>
					<td>'.$descricao.'</td>
					<td>'.date("d/m/Y", strtotime($data_inicio)).'</td>
					<td>'.date("d/m/Y", strtotime($data_fim)).'</td>
					<td>'.$situacao.'</td>
					<td>'.$descricao.'</td>';
					if($id_status_atividade != 4)
						echo '<td><input type="button" value="Alterar" class="bt_verde" onClick="alterar('.$id_atividade.')" /></td>';
					else
						echo '<td><input type="button" value="Alterar" class="bt_cinza"  /></td>';
				echo '</tr>';
			}
		}
		?>
        </div>
        <!-- end relatorio --> 
      </div>
      <!-- end content_right --></td>
  </tr>
</table>
</body>
</html>