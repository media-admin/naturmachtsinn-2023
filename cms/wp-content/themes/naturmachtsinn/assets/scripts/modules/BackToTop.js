//
// BackTotop.js
//

jQuery(document).ready(function(){

	// Button is created via JavaScript and included before the end of the body tag.
	var back_to_top_button = ['<a href="#top" class="back-to-top"><p><img src="../../assets/icons/icon_back-to-top.svg"</p></a>'].join("");
	jQuery("body").append(back_to_top_button)

	// Button becomes hidden
	jQuery(".back-to-top").hide();

	// Function for Scroll Animation
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) { // After scrolling 100 Pixel
				jQuery('.back-to-top').fadeIn();
			} else {
				jQuery('.back-to-top').fadeOut();
			}
		});

		jQuery('.back-to-top').click(function () { // Click on the button

			jQuery('html, body').animate({
				scrollTop: $(".site-content").offset().top-120
			}, 800);
		});
	});

});
