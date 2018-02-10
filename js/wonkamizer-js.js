( function($) {
	"use strict";

	// vanilla javascript
	var search_btn = document.querySelector( '#search-btn-toggle' ),
	search_field = document.querySelector( 'input[type="search"]' );

	search_btn.addEventListener( 'click',  function() {
		if ( getComputedStyle(search_field, null ).display == 'none' ) {
			search_fade_in();
		} else { 
			search_fade_out();
		}
	});

	function search_fade_in() {
		search_field.style.display = 'block';
		setTimeout( function() { search_field.style.left =  '0%'; search_field.style.opacity =  1; }, 200);
		setTimeout( function() { search_field.focus(); }, 800);
		search_field.addEventListener( 'blur', search_fade_out);
	}

	function search_fade_out() {
		search_field.style.opacity =  0;
		search_field.style.left =  '100%'; 
		setTimeout( function() { search_field.style.display = 'none'; search_field.value = ''; }, 800);
	}

	// enters the jQuery
	$(document).ready( function() {
	         $(".scroll-top").hide(); //hide your div initially
	         var topOfOthDiv = $("#top-of-page").offset().top;
	         $(window).scroll(function() {
	             if($(window).scrollTop() > topOfOthDiv) { //scrolled past the other div?
	                 $(".scroll-top").show(); //reached the desired point -- show div
	             }
	             if($(window).scrollTop() < topOfOthDiv) { //scrolled past the other div?
	               $(".scroll-top").hide(); //hide your div initially
	             }
	         });
	     });
})(jQuery);