var navbar =  $('.sidebare_fixed');  // navigation block
var wrapper = $('.left_part');        // may be: navbar.parent();

$(window).scroll(function(){
    var nsc = $(document).scrollTop();
    var bp1 = wrapper.offset().top;
    var bp2 = bp1 + wrapper.outerHeight()-$(window).height();
    
    if (nsc>bp1) {  navbar.css('position','fixed'); }
    else { navbar.css('position','relative'); }
    if (nsc>bp2) { navbar.css('top', bp2-nsc); }
    else { navbar.css('top', '0'); }
});



//  Block up/down
$('.menu__header').click(function() {
  $('#menu_hiden').slideToggle("slow");
});


// Back to Top
	var $btnTop = $(".scrollTop")
	$(window).on("scroll", function (){
		if ($(window).scrollTop() >= 500) {
			$btnTop.fadeIn();
		} else {
			$btnTop.fadeOut();
		}
	});
	$btnTop.on("click", function(){
		$("html,body").animate({scrollTop: 0}, 1000)
	});
	// END Back to Top