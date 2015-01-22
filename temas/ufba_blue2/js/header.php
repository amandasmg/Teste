<?php
require_once("../../../config.php");
global $CFG;
?>

// FUN��O QUE MUDA A IMAGEM DE FUNDO DO HEADER DA P�GINA PRINCIPAL DE ACORDO COM A RESOLU��O
function header() {
	var w = screen.width;
	var aux = document.getElementById('header-home');
	if (aux != null) {
		switch (w) {
			case 800: {
				aux.style.height = '53px';
				aux.style.background = '#043C77 url(<?php echo $CFG->themewww.'/'.current_theme() ?>/pix/heading800.png) left center no-repeat';
			}break;
			case 1280: {
				aux.style.height = '131px';
				aux.style.background = '#043C77 url(<?php echo $CFG->themewww.'/'.current_theme() ?>/pix/heading1280.png) left center no-repeat';
			}break;
			default: { // Foi considerada "1024 x *" a resolu��o default
				aux.style.height = '84px';
				aux.style.background = '#043C77 url(<?php echo $CFG->themewww.'/'.current_theme() ?>/pix/heading1024.png) left center no-repeat';
			}
		}
	}
}
