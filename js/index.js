$(document).ready(function() {
	$('.preloader').hide();


});

$('.btn_liberador').on('click', function(event) {
	console.log("Accediento a Liberador...");
	$('.botones').hide();
	$('.preloader').fadeIn(800);
	setTimeout(function(){
		window.location.href = base_url+'liberador/lib_liberar_c/index';
	}, 1200)
});

$('.btn_analista').on('click', function(event) {
	console.log("Accediento a Analistas...");
	$('.botones').hide();
	$('.preloader').fadeIn(800);
	setTimeout(function(){
		window.location.href = base_url+'analista/ana_analista_c/index';
	}, 1200)
});

$('input.jsgrid-insert-mode-button').hide();