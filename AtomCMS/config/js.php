<?php
// Javascript:s


?>

<!--JQuery -->
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

<!--JQuery UI -->
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

 <script>
	
	$(document).ready(function() {
		
		$("#console-debug").hide();
		
		$("#btn-debug").click(function(){
			
			$("#console-debug").toggle();	
			
		});
		
	});
	
 </script>