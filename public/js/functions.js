//ANIMAÇÃO
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){     
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});

//MENU
var $ = jQuery.noConflict();
$(function() {
	$('#activator').click(function(){
		$('#box').animate({'top':'0px'},900);
	});
	$('#boxclose').click(function(){
		$('#box').animate({'top':'-1000px'},900);
	});
});
$(document).ready(function(){
//Hide (Collapse) the toggle containers on load
$(".toggle_container").hide(); 
//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
$(".trigger").click(function(){
	$(this).toggleClass("active").next().slideToggle("slow");
        return false; //Prevent the browser jump to the link anchor
    });

});

//TESTEMUNHOS        
$(function () {
 $("#slider3").responsiveSlides({
 	auto: true,
 	pager: false,
 	nav: true,
 	speed: 500,
 	namespace: "callbacks",
 	before: function () {
 		$('.events').append("<li>before event fired.</li>");
 	},
 	after: function () {
 		$('.events').append("<li>after event fired.</li>");
 	}
 });
});

//CLICK GO TO TOP
$(document).ready(function() {
    $().UItoTop({ easingType: 'easeOutQuart' });
});