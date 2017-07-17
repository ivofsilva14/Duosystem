$(document).ready(function () {
	// menu esquerda
	$('#accordion a.item').click(function () {
		//slideup or hide all the Submenu
		$('#accordion li').children('ul').slideUp('');	
		//remove all the "Over" class, so that the arrow reset to default
		$('#accordion a.item').each(function () {
			if ($(this).attr('rel')!='') {
				$(this).removeClass($(this).attr('rel') + 'Over');	
			}
		});
		//show the selected submenu
		$(this).siblings('ul').slideDown('');
		//add "Over" class, so that the arrow pointing down
		$(this).addClass($(this).attr('rel') + 'Over');			
		return false;
	});
	$('#insercao').click(function () {
		popup('popup/inserir-atividade.php','','700','600','no');
	});
	
});
function popup(url,target,largura,altura,barra) {
	w = screen.width;
	h = screen.height;
	meio_w = w/2;
	meio_h = h/2;
	altura2 = altura/2;
	largura2 = largura/2;
	meio1 = meio_h-altura2;
	meio2 = meio_w-largura2;
	window.open(url,target,'scrollbars='+barra+',toolbar=no,location=no,directories=no,status=no, menubar=no,resizable=no,copyhistory=no,height=' + altura + ',width=' + largura + ',top='+meio1+',left='+meio2+''); 
}
function alterar(id_atividade)
{
	popup('popup/alterar-atividade.php?id_atividade='+id_atividade,'','700','600','no');
}