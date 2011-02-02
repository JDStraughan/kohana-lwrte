##What
A simple wrapper for the Lightweight Rich Text Editor for jQuery <http://code.google.com/p/lwrte/> that allows easy integration in Kohana 3 projects.

##Why
Keeping the javascript, helper methods, and config in a module makes it easy.

##How
 1. Add to bootstrap
 2. Override config file and update with your upload directory (properly CHMODed)
 3. Set your site root in the /media/jquery.rte.tb.js file (have not forked js project to fix)
 4. Use helper methods in lwrte class to invoke js
 5. Add class name passed in step 4 to a textarea, it becomes an RTE with image upload capabilities

You can override the upload action for custom functionality. 