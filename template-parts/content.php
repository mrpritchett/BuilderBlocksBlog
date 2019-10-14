<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Builder_Blocks_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
		<div class="entry-header-color">
			<div class="entry-title-wrapper">
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( esc_html__( ' ', 'builder-blocks-blog' ) );
					if ( $categories_list ) {
						/* translators: 1: list of categories. */
						printf( '<span class="cat-links">' . esc_html__( '%1$s', 'builder-blocks-blog' ) . '</span>', $categories_list ); // WPCS: XSS OK.
					}
				?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</div>

			<div class="entry-meta">
				<?php
					builder_blocks_blog_posted_on();
					builder_blocks_blog_posted_by();
				?>
			</div>
		</div>
	</header>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'builder-blocks-blog' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="entry-footer">
		<?php builder_blocks_blog_entry_footer(); ?>
	</footer>
</article>