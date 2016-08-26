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

			<header class="archive-page">

				<?php $term = $wp_query->queried_object; ?>
				<h2><a href="<?php echo get_post_type_archive_link('fotografias'); ?>">Fotografias</a><span><?php echo $term->name; ?></span></h2>

				<ul class="social-icons">
					<li>Compartilhe: </li>
		            <li><a href="javascript:"><i class="fa fa-facebook"></i></a></li>
		            <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>		            
		            <!--<li><a href="#"><i class="fa fa-vimeo"></i></a></li>-->
		            <li><a href="javascript:"><i class="fa fa-pinterest"></i></a></li>
		        </ul>
			</header>

			<session class="full-portfolio">
				<div class="container">

					<div class="isotope">
						<div class="grid-sizer"></div>

						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content-fotografias', get_post_format() ); ?>
						<?php endwhile; ?>

					</div>

				</div>
			</session>








			<?php /*
			

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'twentythirteen' ), get_the_date() );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'twentythirteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentythirteen' ) ) );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'twentythirteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentythirteen' ) ) );
					else :
						_e( 'Archives', 'twentythirteen' );
					endif;
				?></h1>
			</header><!-- .archive-header -->

			<?php /* The loop * ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

*/ ?>
		</div>
	</div>
</session>

<?php get_footer(); ?>