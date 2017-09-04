$( document ).ready(function() {

	tinymce.init({
		selector: ".text-form",
	});

	$('#blog-post > p').css('line-height', '35px');

	$('.pagination').addClass('pagination-lg');

});

