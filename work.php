<?php foreach ( $work_list as $file ): ?>

<hr><!-- provides a visual break if styles are disabled (hidden in stylesheet) -->

<section id="<?php echo str_ireplace( '.php' , '' , $file) ?>" class="work">

	<?php include_once( 'work/' . $file ); ?>

</section>

<?php endforeach; ?>
	
