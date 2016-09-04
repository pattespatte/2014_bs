/**
 * Theme functions file
 */
jQuery(document).ready(function($){
//	alert('test');

// hide header image if the page also has a featured image START
	if($(".has-post-thumbnail").length!==0){
		$("#site-header").remove();
		$("body").addClass("has-post-thumb");
	}
// hide header image if the page also has a featured image END

// external links to tab START
$('a').each(function() {
	var a = new RegExp('/' + window.location.host + '/');
	if (!a.test(this.href)) {
		$(this).attr("target","_blank");
	}
});
// external links to tab END


});

// Responsive

jQuery(window).on("load resize scroll",function(e){
var pageWidth = jQuery(window).width();
	if( jQuery(window).width()>846){
		//alert("more than @media screen and (min-width: 846px)");
		} else {
		//alert("less than @media screen and (min-width: 846px)");
	}
});
