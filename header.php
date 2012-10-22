<?php include_once( 'config.php' ); ?>
<!DOCTYPE html>
<html>

	<head>
	
		<title>Oliver Smith</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" type="text/css" href="style.css">

		<meta name="description" content="Oliver Smith is an Artist working with code and emergent technologies. He runs workshops in the London area is a lecturer on Graphic Design: New Media at UCA">

		<meta name="keywords" content="london, uk, design, code, technology, open source, audio, installation, generative, digital, html, javascript, html5, processing, arduino">
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<script src="jquery.1.7.0.js" type="text/javascript"></script>
		
		<script src="script.js"></script>
		
	</head>
	
	<body>
			
		<div id="wrapper">

				<nav>
					<ul id="info">
						
						<li class="active"><h1>Oliver Smith</h1></li>
						<li><a href="mailto:contact@ollyjsmith.com">contact@ollyjsmith.com</a></li>
						<li>+44 (0) 7596 090 678</li>
						<li><h2><a href="#about">About</a></h2></li>
						<!--<li><a href="http://log.theyaremany.com">Many</a></li>
						<li><a href="http://twitter.com/ollyjsmith">@ollyjsmith</a></li>-->
					</ul>
					
					<ul id="work-list">
					
						<li class="active"><h2>Work</h2></li>
						<?php foreach ( $work_list as $work ): ?>	
							<?php 	
								$tag = str_ireplace( '.php' , '' , $work ); 
								$title = $project_details[$tag]['title'];		
							?>
							<li><a href="#<?php echo $tag ?>"><?php echo $title?></a></li>
						<? endforeach; ?>
								
					</ul>	
						
				</nav>
				
				<div class="clearfix">-</div>