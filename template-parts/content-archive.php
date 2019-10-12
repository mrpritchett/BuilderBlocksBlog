<?php
/**
 * Template part for displaying posts on blog page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Builder_Blocks_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php builder_blocks_blog_post_thumbnail(); ?>

	<div class="entry-wrapper">

		<header class="entry-header">
			<div class="entry-meta">
				<?php the_category(); ?> <time class="entry-date"><?php the_date(); ?></time>
			</div>
			<!-- Title -->
			<h3 class="entry-title">
				<?php the_title(); ?>
			</h3>

		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
