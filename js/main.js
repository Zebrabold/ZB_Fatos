
// ==========  CARREGA IMAGENS APENAS NA VIEWPORT ============= 
$(function() {
    $("img").lazyload();
});



// ==========  PLAYLIST YOUTUBE ============= 
	var youTubeURL = "http://www.youtube.com/user/fatosdesconhecidos";
	var yuneroWidgetHeight = 415; 
	var yuneroWidgetWidth = 380; 
	var yuneroVideoHeight = 200;
	
	function goClicked() {
		$('#yunero').empty().append(' carregando ...');
		youTubeURL=$('#youTubeUrl').val();
		
		loadYunero();
	}


// ==========  TABS ============= 
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})


// ==========  IMAGEM DO DIA =============
$('#carousel-imagem-do-dia').carousel({
    	interval: false
    });

// ==========  MENU STICKY =============
	$('.header-sticky').hide();	
	function fixDiv() {
	  if ($(window).scrollTop() < 160) 
	    $('.header-sticky').fadeOut('fast');
	  if ($(window).scrollTop() > 161) 
	    $('.header-sticky').fadeIn('fast');
	}
	$(window).scroll(fixDiv);
	fixDiv();


// ==========  ADICIONA A CLASSE ACTIVE AO SLIDER DA IMAGEM DO DIA =============
  $("#carousel-imagem-do-dia .carousel-inner .item:first").addClass("active");
  $("#carousel-example-generic .carousel-inner .item:first").addClass("active");



