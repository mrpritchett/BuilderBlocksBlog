<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Builder_Blocks_Blog
 */

get_header();
?>

	<div id="primary" class="wrapper content-area flex fd-c jc-c">
		<main id="main" class="site-main ta-c">

			<section class="error-404 not-found flex fd-c jc-c">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Sorry, page not found', 'builder-blocks-blog' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'But you can always search for what you\'re looking for.', 'builder-blocks-blog' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
