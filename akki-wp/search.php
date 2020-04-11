<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Akka WP
 */

get_header();
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-md-3 px-0">
            <h1><?php esc_html_e( 'Search results for', 'fancy-lab' ); ?>: <?php echo get_search_query(); ?></h1>

            <?php 

get_search_form();

    // If there are any posts
    if( have_posts() ):

        // Load posts loop
        while( have_posts() ): the_post(); ?>
           
           <article <?php post_class(); ?>>
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
	<div class="post-thumbnail">
		<?php 
		if( has_post_thumbnail() ):
			the_post_thumbnail( 'fancy-lab-blog', array( 'class' => 'img-fluid' ) );
		endif;
		?>
	</div>
	<div class="meta">
		<p><?php esc_html_e( 'Published by', 'fancy-lab' ); ?> <?php the_author_posts_link(); ?> 
		<?php esc_html_e( 'on', 'fancy-lab' ); ?> <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date() ); ?></a>
		<br />
		<?php if( has_category() ): ?>
			<?php esc_html_e( 'Categories', 'fancy-lab' ); ?>: <span><?php the_category( ' ' ); ?></span>
		<?php endif; ?>
		<br />
		<?php if( has_tag() ): ?>
			<?php esc_html_e( 'Tags', 'fancy-lab' ); ?>: <span><?php the_tags( '', ', ' ); ?></span>
		<?php endif; ?>
		</p>
	</div>
	<?php if( has_excerpt() ): ?>
        <div class="content"><?php the_excerpt(); ?></div>
    <?php elseif( strpos( $post->post_content, '<!--more-->' ) ): ?>
	   <div class="content"><?php the_content( 'More' ); ?></div>
    <?php else: ?>
         <div class="content"><?php the_excerpt(); ?></div>
    <?php endif; ?>
</article>

        <?php endwhile;

        // We're using numeric page navigation here.
        the_posts_pagination( array(
            'prev_text'		=> esc_html__( 'Previous', 'fancy-lab' ),
            'next_text'		=> esc_html__( 'Next', 'fancy-lab' ),
        ));
        
    else:
?>
    <p><?php esc_html_e( 'There are no results for your query.', 'fancy-lab' ); ?></p>
<?php endif; ?>

            </div>
        </div>
    </div>
</main>



<?php get_footer()?>