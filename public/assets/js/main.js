$( document ).ready(function() {

	tinymce.init({
		selector: ".text-form",
	});

	$('#blog-post > p').css({
		'line-height': '40px',
		'margin': '0px 0px 20px',
		'paddig': '0px',
		'letter-spacing': '0px'
		});

	$('.pagination').addClass('pagination-lg');

});

