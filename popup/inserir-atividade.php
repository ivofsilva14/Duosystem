<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex,nofollow">
<title>Duosystem Inserção</title>
<link rel="stylesheet" type="text/css" href="../css/style_popup.css"/>
<link rel="stylesheet" type="text/css" href="../js/datepicker_range/jquery.datepick.css">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/cadastra_atividade.js"></script>
<script type="text/javascript" src="../js/datepicker_range/jquery.datepick.js"></script>
<script type="text/javascript" src="../js/datepicker_range/jquery.datepick-pt-BR.js"></script>
</head>
<body>
<form name="filtrar" method="post" id="form_insert">
  <!-- conteudo do relatorio -->
  <div id="relatorio">
    <h1>Duosystem Inserção</h1>
    <table width="100%" border="0" cellspacing="10" cellpadding="15" class="corrigir_dados inserir_pedido">
      
       <tr class="quadrante" id="dados_pedido">
        <td width="33%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="2"><h2>Informação da Atividade</h2></td>
            </tr>
             <tr>
              <td width="80"><strong>Nome</strong></td>
              <td><input type="text" name="nome" id="nome"  /></td>
            </tr>
            <tr>
              <td width="80"><strong>Descricao</strong></td>
              <td><textarea name="descricao" id="descricao"></textarea></td>
            </tr>
            <tr>
              <td width="80"><strong>Data Inicio</strong></td>
              <td><input type="text" name="data_inicio" id="data_inicio" readonly="readonly"  /></td>
            </tr>
            <tr>
              <td width="80"><strong>Data Fim</strong></td>
              <td><input type="text" name="data_fim" id="data_fim" readonly="readonly"  /></td>
            </tr>
            <tr>
              <td width="80"><strong>Status</strong></td>
              <td>
              	<select name="status">
                	<option value="1">Pendente</option>
                    <option value="2">Em Desenvolvimento</option>
                    <option value="3">Em Teste</option>
                    <option value="4">Concluído</option>
                </select>
              </td>
            </tr>
            <tr>
              <td width="80"><strong>Situacao</strong></td>
              <td>
              	 <select name="situacao">
                   <option value="1">Ativo</option>
                   <option value="0">Inativo</option>
                </select>
              </td>
            </tr>
         </table>
       </td>
       </tr>
    </table>
    <center>
     <input type="button" value="Cadastrar" id="cadastrar" class="bt_azul" />

    </center>
  </div>
  <!-- end relatorio -->
</form>
</body>
</html>