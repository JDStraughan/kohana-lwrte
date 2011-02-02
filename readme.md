##What
A simple wrapper for the Lightweight Rich Text Editor for jQuery <http://code.google.com/p/lwrte/>

##Why
Keeping the javascript, helper methods, and config in a module makes it easy.

##How
 1. Add to bootstrap
 2. Override config file and update with your upload directory
 3. Set your site root in the /media/jquery.rte.tb.js file (have not forked js project to fix)

###Optional

Use the helpers to create your scripts/styles in your document's head:


This:

	<?= LWRTE::get_scripts_html(); ?>
	<?= LWRTE::get_styles_html(); ?>

	<script type="text/javascript">
	$(function() {
		var arr = $('.wysiwyg').rte({
			controls_rte: rte_toolbar,
			controls_html: html_toolbar
		});
	});
	</script>
	
Will produce this:

	<script type="text/javascript" src="http://localhost/yoursite/lwrte/media/jquery.rte.js"></script> 
	<script type="text/javascript" src="http://localhost/yoursite/lwrte/media/jquery.rte.ocupload.js"></script> 
	<script type="text/javascript" src="http://localhost/yoursite/lwrte/media/jquery.rte.tb.js"></script>	
	<link type="text/css" href="http://localhost/yoursite/lwrte/media/jquery.rte.css" rel="stylesheet" /> 
	<script type="text/javascript"> 
	$(function() {
		var arr = $('.wysiwyg').rte({
			controls_rte: rte_toolbar,
			controls_html: html_toolbar
		});
	});
	</script> 
	
Based on your config settings.  For configuration of the LWRTE, please visit: <http://code.google.com/p/lwrte/>