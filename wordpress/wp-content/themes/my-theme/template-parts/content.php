<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>

        <?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				my_theme_posted_on();
				my_theme_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php my_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
        if ( $post->post_excerpt ) {
            the_excerpt();
            echo sprintf( '<div class="continue_btn"><a href="%s" class="more-link" rel="bookmark">Continue Reading'.the_title( '<span class="screen-reader-text">"', '"</span>', false ).'</a></div>', esc_url(get_permalink()) );
        } else {
            the_content( sprintf(
                __( 'Continue Reading %s', 'testtheme' ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );
        }

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'my-theme' ),
				'after'  => '</div>',
			) );
		?>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php my_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
