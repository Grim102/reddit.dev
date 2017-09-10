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

	//Google analytics
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-106205441-2', 'auto');
	ga('send', 'pageview');

});

