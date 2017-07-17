$(function() {
	$('#data_inicio').datepick({ 
		rangeSelect: false, monthsToShow: 1, showTrigger: '#calImg'});
	$('#data_fim').datepick({ 
		rangeSelect: false, monthsToShow: 1, showTrigger: '#calImg'});
});
$(document).ready(function () {
	$('#alterar').click(function () {
		if($('#nome').val() == '')
		{
			alert('Informe o Nome da Atividade');
			$('#nome').focus();
		}
		else if($('#descricao').val() == '')
		{
			alert('Informe a Descricao da Atividade');
			$('#descricao').focus();
		}
		else if($('#data_inicio').val() == '')
		{
			alert('Informe a Data de Inicio da Atividade');
			$('#data_inicio').focus();
		}
		else if($('#data_fim').val() == '')
		{
			alert('Informe a Data Final da Atividade');
			$('#data_fim').focus();
		}
		else
		{
			if(confirm('Deseja Alterar Essa Atividade ?'))
			{
				var dados = jQuery( '#form_insert' ).serialize();
				$.ajax({
				url: '../ajax/alterar_atividade.php', /* URL que será chamada */ 
				type: 'POST', /* Tipo da requisição */ 
				data: dados, /* dado que será enviado via POST */
				dataType: 'json', /* Tipo de transmissão */
				success: function(data)
				{
					if(data.sucesso == 1)
					{
						alert('Dados alterados com sucesso');
						window.opener.location.reload();
						window.close();
					} 
					else
					{
						alert('erro');
					}
				}
				});
			}
		}
	});
});