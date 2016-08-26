<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<style>
	h3 {
		text-align: left;
	}
</style>
<session class="box-page institucional">
	<div class="container">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>

						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail" style="float: left; width: 245px; margin-right: 5%;">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<div style="float: left; width: 810px; text-align: left;">
							<?php the_content(); ?>
						</div>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	</div>
</session>
<?php get_sidebar(); ?>
<?php get_footer(); ?>