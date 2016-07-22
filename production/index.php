<?php get_template_part( 'top' ); ?>
<!-- Здесь будет весь контент -->
<?php 
	//$pathToPage = echo get_template_directory_uri();
	
	if ( is_home() ){
		get_template_part( 'pages/main' );
	} elseif ( is_page(7) ) {
		get_template_part('pages/our_works');
	} elseif( is_page(9) ) {
		get_template_part('pages/reviews');
	} elseif( is_page(11) ) {
		get_template_part('pages/main_blog');	
	}
?>
<?php get_footer(); ?>