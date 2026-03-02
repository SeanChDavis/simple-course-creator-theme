<?php
/**
 * Template part for displaying grid items
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'grid-item' ); ?>>

	<header class="entry-header mb-2">
		<?php
		if ( ! is_search() ) {
			scct_post_thumbnail();
		}
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
	</header>

    <?php if ( ! is_search() ) { ?>
        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div>
    <?php } ?>

</article>
