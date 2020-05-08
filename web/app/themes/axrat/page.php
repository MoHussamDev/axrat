<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fiveh
 */

get_header();

?>
 
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		
				if(!empty(get_field('flexible_content'))){
			
				if(have_rows('flexible_content') ):			
				while(have_rows('flexible_content')):
					the_row();
				switch(get_row_layout()){
					case 'slider':
				    include get_template_directory( ).'/acf_markup/slider.php';
					break;
					case 'primary_content':
					include get_template_directory( ).'/acf_markup/primary_content.php';		
					break;
					case 'cards':
					include get_template_directory( ).'/acf_markup/cards.php';		
					break;
					default:
					echo "No Content Here";
					};
				endwhile;
				endif;			
			
		}
					// echo true;

					// if (have_rows('builder')):

					// 	while ( have_rows('builder') ) : the_row();
					// 	if(get_row_layout() === 'Slider'):
					// 	echo get_row_layout();
						
					
					// endif;

						
					// endwhile;

					// endif;
				// while(have_rows('page_builder')) : the_row();
				// 	// var_dump(get_row_layout());
				
				// endwhile;
			
				

	

		// endwhile; // End of the loop.
		?>
		
	



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer(); ?>
