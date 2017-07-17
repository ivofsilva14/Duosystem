<?php 
require_once('../Connections/conexao.php');
require_once('../includes/consulta.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex,nofollow">
<title>Duosystem Inserção</title>
<link rel="stylesheet" type="text/css" href="../css/style_popup.css"/>
<link rel="stylesheet" type="text/css" href="../js/datepicker_range/jquery.datepick.css">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/alterar_atividade.js"></script>
<script type="text/javascript" src="../js/datepicker_range/jquery.datepick.js"></script>
<script type="text/javascript" src="../js/datepicker_range/jquery.datepick-pt-BR.js"></script>
</head>
<body>
<form name="filtrar" method="post" id="form_insert">
<input type="hidden" name="id_atividade" id="id_atividade" value="<?php echo $_GET['id_atividade']?>" />
  <!-- conteudo do relatorio -->
  <div id="relatorio">
    <h1>Duosystem Alteração</h1>
    <table width="100%" border="0" cellspacing="10" cellpadding="15" class="corrigir_dados inserir_pedido">
      
       <tr class="quadrante" id="dados_pedido">
        <td width="33%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="2"><h2>Informação da Atividade</h2></td>
            </tr>
             <tr>
              <td width="80"><strong>Nome</strong></td>
              <td><input type="text" name="nome" id="nome" value="<?php echo $nome?>"  /></td>
            </tr>
            <tr>
              <td width="80"><strong>Descricao</strong></td>
              <td><textarea name="descricao" id="descricao"><?php echo $descricao?></textarea></td>
            </tr>
            <tr>
              <td width="80"><strong>Data Inicio</strong></td>
              <td><input type="text" name="data_inicio" id="data_inicio" value="<?php echo date("d/m/Y", strtotime($data_inicio))?>" readonly="readonly"/></td>
            </tr>
            <tr>
              <td width="80"><strong>Data Fim</strong></td>
              <td><input type="text" name="data_fim" id="data_fim" value="<?php echo date("d/m/Y", strtotime($data_fim))?>" readonly="readonly"  /></td>
            </tr>
            <tr>
              <td width="80"><strong>Status</strong></td>
              <td>
              	 <select name="status">
                    <?php
                    echo($status == '1')?'<option value="1"  selected="selected">Pendente</option>':'<option value="1">Pendente</option>';
                    echo($status == '2')?'<option value="2"  selected="selected">Em Desenvolvimento</option>':'<option value="2">Em Desenvolvimento</option>';
                    echo($status == '3')?'<option value="3"  selected="selected">Em Teste</option>':'<option value="3">Em Teste</option>';
                    echo($status == '4')?'<option value="4"  selected="selected">Concluído</option>':'<option value="4">Concluído</option>';
                    ?>
                </select>
              </td>
            </tr>
            <tr>
              <td width="80"><strong>Situacao</strong></td>
              <td>
              	  <select name="situacao">
                    <?php
                    echo($situacao == '1')?'<option value="1"  selected="selected">Ativo</option>':'<option value="1">Ativo</option>';
                    echo($situacao == '0')?'<option value="0"  selected="selected">Inativo</option>':'<option value="0">Inativo</option>';
                    ?>
                </select>
              </td>
            </tr>
         </table>
       </td>
       </tr>
    </table>
    <center>
     <input type="button" value="Alterar" id="alterar" class="bt_azul" />

    </center>
  </div>
  <!-- end relatorio -->
</form>
</body>
</html>