<?php
require_once("../../../config.php");
global $CFG;
?>

// FUN��O QUE MUDA A IMAGEM DE FUNDO DO HEADER DA P�GINA PRINCIPAL DE ACORDO COM A RESOLU��O
function header() {
	var w = screen.width;
	var aux = document.getElementById('header-home');
	if (aux != null) {
		var classe = aux.getElementsByTagName('div');
		for (var i=0; i < classe.length; i++) {
			if (classe[i].className.indexOf('i3') > -1) {
				switch (w) {
				case 800: {
					classe[i].style.height = '53px';
					classe[i].style.background = '#043C77 url(<?php echo $CFG->themewww.'/'.current_theme() ?>/pix/heading800.png) left center no-repeat';
				}break;
				case 1280: {
					classe[i].style.height = '111px';
					classe[i].style.background = '#043C77 url(<?php echo $CFG->themewww.'/'.current_theme() ?>/pix/heading1280.png) left center no-repeat';
				}break;
				default: { // Foi considerada "1024 x *" a resolu��o default
					classe[i].style.height = '84px';
					classe[i].style.background = '#043C77 url(<?php echo $CFG->themewww.'/'.current_theme() ?>/pix/heading1024.png) left center no-repeat';
				}
				}
			}
		}
	}
}
