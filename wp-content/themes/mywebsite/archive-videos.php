<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<session class="box-page full-portfolio">
	<div class="isotope">
		<div class="grid-sizer"></div>

       <?php
        $getGaleria = array(
            'post_type' => 'videos',
            'post_status' => 'any',
            'orderby'           => date,
            'order'             => 'ASC'
        );

        $galeria = new WP_Query( $getGaleria );

        while($galeria->have_posts()) : $galeria->the_post();

            $capa_medium = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
			<div class="item motion-graphics video">
				<figure>
				<?php $url_video = get_post_meta($post->ID, 'URL do Vídeo'); ?>
					<iframe src="https://player.vimeo.com/video/<?php echo $url_video[0]; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</figure>
			</div>

        <?php endwhile; ?>

	</div>
</session>

<script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope-docs.min.js"></script>
<script type="text/javascript">

	jQuery( function() {
		// init Isotope
		var $container = jQuery('.isotope').isotope({
			itemSelector: '.item',
			transitionDuration: '0.6s',
			masonry: {
				columnWidth: '.grid-sizer'
			}
		});
	
		// bind filter button click
		jQuery('.full-portfolio #filters').on( 'click', 'button', function() {
			var filterValue = jQuery( this ).attr('data-filter');
			$container.isotope({ filter: filterValue });
		});
		
		// change is-checked class on buttons
		jQuery('.full-portfolio .button-group').each( function( i, buttonGroup ) {
			var $buttonGroup = jQuery( buttonGroup );
			$buttonGroup.on( 'click', 'button', function() {
				$buttonGroup.find('.is-checked').removeClass('is-checked');
				jQuery( this ).addClass('is-checked');
			});
		});
	
		// layout Isotope again after all images have loaded
		$container.imagesLoaded( function() {
			$container.isotope('layout');
		});
	});

	</script>

<?php get_footer(); ?>
