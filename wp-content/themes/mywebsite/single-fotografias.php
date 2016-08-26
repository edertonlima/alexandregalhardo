<?php
/**
 * @package WordPress
 * @subpackage My Web
 * @since My web Site 1.0
 **
 */

get_header(); ?>

<session class="box-page">
	<div class="container">
		<div class="row">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content-fotografias', get_post_format() ); ?>

			<?php endwhile; ?>

		</div>
	</div>
</session>

<?php get_footer(); ?>