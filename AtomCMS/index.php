<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
			
		<title><?php echo $page['title']; ?> | <?php echo $site_title; ?></title>		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php include('config/css.php'); ?>
		
        <?php include('config/js.php'); ?>
		
	</head>
	
<body>		

	<div id="wrap">
		
			<?php include(D_TEMPLATE.'/navigation.php'); //  Main Navigation ?>
	
			<div class="container">
			    	
		    	<h1><?php echo $page['header']; ?></h1> 
		    	
		    	<?php echo $page['body_formatted']; ?>
		        
			</div> <!--End Container -->
		    
	</div> <!--End Wrap -->
	
		<?php include(D_TEMPLATE.'/footer.php'); ?>
		
		<?php if($debug == 1) { include('widgets/debug.php'); } ?>
</body>
	
	
</html>