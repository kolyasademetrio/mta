<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="container woocomm__container">
	<div class="row woocomm__row">
		<div class="col-xs-12">
			<div class="woocomm__col">

				<?php if ( have_posts() ) : ?>

					<h1 class="page-title search__page__title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
					<div class="products__list">

						<?php
						// Start the loop.
						while ( have_posts() ) : the_post(); ?>

							<?php
							/*
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
							wc_get_template_part( 'content', 'product' );

							// End the loop.
						endwhile;
						?>
					</div><!-- products__list End -->
					<?php
					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( '←', 'twentyfifteen' ),
						'next_text'          => __( '→', 'twentyfifteen' ),
						/*'prev_text'          => __( '❬', 'twentyfifteen' ),
                        'next_text'          => __( '❭', 'twentyfifteen' ),*/
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
					) );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'none' );

				endif;
				?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
