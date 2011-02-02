##What
A simple wrapper for Lightweight Rich Text Editor (RTE / WYSIWYG) for jQuery

<http://code.google.com/p/lwrte/>

##Why
Keeping the javascript, helper methods, and config in a module makes it easy.

##How
 1. Add to bootstrap
 2. Override config file and update with your upload directory

###Optional

Use the helpers to create your scripts/styles in your document's head:


This:

	<?= jQueryRTE::get_scripts_html(); ?>
	<?= jQueryRTE::get_styles_html(); ?>

	<script type="text/javascript">
	$(function() {
		var arr = $('.wysiwyg').rte({
			controls_rte: rte_toolbar,
			controls_html: html_toolbar
		});
	});
	</script>
	
Will produce this:

	<script type="text/javascript" src="http://localhost/yoursite/jqueryrte/media/jquery.rte.js"></script> 
	<script type="text/javascript" src="http://localhost/yoursite/jqueryrte/media/jquery.rte.ocupload.js"></script> 
	<script type="text/javascript" src="http://localhost/yoursite/jqueryrte/media/jquery.rte.tb.js"></script>	
	<link type="text/css" href="http://localhost/yoursite/jqueryrte/media/jquery.rte.css" rel="stylesheet" /> 
	<script type="text/javascript"> 
	$(function() {
		var arr = $('.wysiwyg').rte({
			controls_rte: rte_toolbar,
			controls_html: html_toolbar
		});
	});
	</script> 
	
Based on your config settings.  For configuration of the LWRTE, please visit: <http://code.google.com/p/lwrte/>