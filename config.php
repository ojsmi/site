<?php
	
	$project_details = Array (
								'phase-state' => Array ( 'title' => 'PhaseState' ),
								'reverberation' => Array ( 'title' => 'Reverberation' ),
								'aqt16' => Array ( 'title' => 'AQT_16 ( Written Images )' ),
								'nokiapush' => Array ( 'title' => 'Nokia Push' ),
								'musicalsuitcase' => array( 'title' => 'Musical Suitcase' ),
								'presentation' => array( 'title' => 'Presentation Tools' ),
								'lucidinc' => array( 'title' => 'Lucid Inc.' ),
								'inventive' => array( 'title' => 'Inventive &amp; Co.' ),
								'onedotzero_cascade' => array( 'title' => 'Cascade ( onedotzero )')
							);
	
	//list files in /work
	
	$directory_to_read = 'work';
	
	$directory_handler = opendir ( $directory_to_read );
	
	$work_list = array();
	
	while ( $file = readdir ( $directory_handler )):
	
		if ( $file != "." && $file != ".." && $file != 'images' && $file != 'downloads' && $file != 'template.php'):
		
			$work_list[] = $file ;
	
		endif;
		
	endwhile;
	
	closedir( $directory_handler );

?>