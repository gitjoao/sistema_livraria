$(function () {
  
  $(document).ready(function() {
  	var alt_brow = $(window).height();   // altura do browser
	var alt_doc = $(document).height(); // altura do documento HTML
	var comp_brow = $(window).width();   // comprimento do browser
	var comp_doc = $(document).width(); // comprimento do documento HTML

	if(comp_brow < 1200){
		$(document).ready(function() {
		  $("body").addClass("sidebar-collapse");
		});
	}
  });
  
});
