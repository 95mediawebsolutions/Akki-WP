<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Akka Wp
 */

get_header();
?>

<main>
		<div class="container">
            <div class="row">
            <div class="col-lg-9 offset-md-3 px-0">
			<div class="error-404">

				<header>
					<h1><?php esc_html_e( 'Page not found', 'akka-wp' ); ?></h1>
					<p><?php esc_html_e( 'Unfortunately, the page you tried to reach does not exist on this site', 'akka-wp' ); ?></p>
				</header>
				<?php 
					the_widget( 'WP_Widget_Recent_Posts', 
						array(
							'title'		=> esc_html__( 'Take a Look at Our Latest Posts', 'akka-wp' ),
							'number'	=> 3,
						) ); 
				?>
			</div>
        </div>
        </div>
	</main>



<?php get_footer();?>