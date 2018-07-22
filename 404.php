<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header();
?>
	<div class="row">
		<div class="col-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bubble' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php sprintf( esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bubble' ), convert_smilies( ':)' ) ); ?></p>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- #col -->
	</div><!-- #row -->
	

<?php
get_footer();
